<?php

namespace Modules\Order\Http\Controllers;

use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Show;
use Modules\Game\Entities\Game;
use Modules\Order\Consts\OrderDisputeConst;
use Modules\Order\Consts\OrderSendStatusConst;
use Modules\Order\Consts\OrderStatusConst;
use Modules\Order\Consts\OrderTypeConst;
use Modules\Order\Consts\PayStatusConst;
use Modules\Order\Repositories\Order;
use Modules\System\Entities\Site;

class OrderController extends AdminController
{

    protected $description = [
        'index' => '列表',
        'show' => '详情',
        'edit' => '编辑',
        'create' => '创建',
    ];

    protected $title = '订单';

    public function getPayStatus(): array
    {
        return $this->payStatus;
    }

    public function edit($id, Content $content)
    {
        if (!is_int($id)) {
            $order = Order::make()->model()->newQuery()->where('order_no', $id)->first();
            if ($order) {
                $id = $order->id;
            }
        }
        return $content
            ->translation($this->translation())
            ->title($this->title())
            ->description($this->description()['edit'] ?? trans('admin.edit'))
            ->body($this->form()->edit($id));
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Order(['site', 'game']), function (Grid $grid) {
            $grid->model()->orderBy('order_id', 'desc');
            $grid->column('order_id')->sortable();
            $grid->column('order_no')->filter();
            $grid->column('site.site_name', '站点');
            $grid->column('game.name', '游戏');
            $grid->column('pay_status')
                ->filter(
                    Grid\Column\Filter\In::make(PayStatusConst::STATUS)
                )->using(PayStatusConst::STATUS);

            $grid->column('send_status')
                ->filter(
                    Grid\Column\Filter\In::make(OrderSendStatusConst::STATUS)
                )
                ->using(OrderSendStatusConst::STATUS);

            $grid->column('order_status')
                ->filter(
                    Grid\Column\Filter\In::make(OrderStatusConst::STATUS)
                )
                ->using(OrderStatusConst::STATUS);
//            $grid->column('is_scheduled');
//            $grid->column('is_problem');
//            $grid->column('problem_type');
//            $grid->column('signer');
//            $grid->column('signsend');
            $grid->column('order_type')
                ->filter(
                    Grid\Column\Filter\In::make(OrderTypeConst::STATUS)
                )
                ->using(OrderTypeConst::class::STATUS);;
//            $grid->column('is_old');
//            $grid->column('is_urgent');
//            $grid->column('isen_urgent');
//            $grid->column('dispute_status');
//            $grid->column('wait_assign');
//            $grid->column('is_disribut');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {

                $filter->equal('site_id', '站点')
                    ->width(2)
                    ->select(Site::query()->pluck('site_name', 'id'));

                $filter->equal('game_id', '游戏')
                    ->width(2)
                    ->select(Game::query()->pluck('name', 'game_id'));

                $filter->equal('pay_status')
                    ->width(2)
                    ->select(PayStatusConst::STATUS);

                $filter->equal('send_status')
                    ->width(2)
                    ->select(OrderSendStatusConst::STATUS);

                $filter->equal('dispute_status', '争议状态')
                    ->width(2)
                    ->select(OrderDisputeConst::STATUS);

                $filter->equal('is_scheduled')
                    ->width(2)
                    ->select([0 => '未安排', '1' => '已安排']);

                $filter->like('order_no')
                    ->width(2);

                $filter->equal('order_type', '订单类型')
                    ->width(2)
                    ->select(OrderTypeConst::STATUS);


                $filter->equal('order_status')
                    ->width(2)
                    ->select(OrderStatusConst::STATUS);

                $filter->equal('is_problem', '问题订单')
                    ->width(2)
                    ->select([0 => '正常', '1' => '问题']);

                $filter->equal('is_old', '是否新客')
                    ->width(2)
                    ->select([
                        1 => '新', '2' => '老'
                    ]);

//                $filter->between('created_at')->datetime()->width(4);

                $filter->panel();
                $filter->expand();
            });

        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Order(['site', 'game']), function (Show $show) {
            $show->field('order_no');
            $show->field('order_number', '流水');
            $show->field('site.site_name', '站点');
            $show->field('game.name', '游戏');
            $show->field('pay_status')->using(PayStatusConst::STATUS);
            $show->field('send_status')->using(OrderSendStatusConst::STATUS);
            $show->field('order_status')->using(OrderStatusConst::STATUS);
            $show->field('is_scheduled');
            $show->field('is_problem');
            $show->field('problem_type');
            $show->field('signer');
            $show->field('signsend');
            $show->field('order_type')->using(OrderTypeConst::STATUS);
            $show->field('is_old');
            $show->field('is_urgent');
            $show->field('isen_urgent');
            $show->field('dispute_status')->using(OrderDisputeConst::STATUS);
            $show->field('wait_assign');
            $show->field('is_disribut');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Order(['en', 'zh', 'info', 'items', 'pay', 'boost', 'refund']), function (Form $form) {

            $form->disableSubmitButton();
            $form->disableResetButton();

            $form->tab('基本', function (Form $form) {

                $form->column(6, function (Form $form) {

                    $form->text('order_no', '订单编号')
                        ->disable();

                    $form->text('order_number', '订单流水')
                        ->disable();

                    $form->select('pay_status')
                        ->disable()
                        ->options(PayStatusConst::STATUS);

                    $form->select('send_status')
                        ->disable()
                        ->options(OrderSendStatusConst::STATUS);

                    $form->select('order_status')
                        ->disable()
                        ->options(OrderStatusConst::STATUS);

                    $form->select('is_scheduled')
                        ->disable()
                        ->options([
                            0 => '未安排', 1 => '已安排'
                        ]);

                    $form->select('is_problem', '问题订单')
                        ->disable()
                        ->options([
                            0 => '正常', 1 => '问题'
                        ]);

                    $form->text('problem_type')
                        ->disable();

                    $form->text('en.real_name', '英客签收')
                        ->disable();

                    $form->text('zh.real_name', '中客签收')
                        ->disable();
                });

                $form->column(6, function (Form $form) {

                    $form->select('site_id', '站点')
                        ->disable()
                        ->options(Site::query()->pluck('site_name', 'id'));

                    $form->select('game_id', '游戏')
                        ->disable()
                        ->options(Game::query()->pluck('name', 'game_id'));

                    $form->select('order_type')
                        ->disable()
                        ->options(OrderTypeConst::STATUS);

                    $form->select('is_old')
                        ->disable()
                        ->options([
                            1 => '新', '2' => '老'
                        ]);

                    $form->select('is_urgent')
                        ->disable()
                        ->options([
                            0 => '否', 1 => '是'
                        ]);
                    $form->select('isen_urgent')
                        ->disable()
                        ->options([
                            0 => '否', 1 => '是'
                        ]);
                    $form->select('dispute_status')
                        ->disable()
                        ->options(OrderDisputeConst::STATUS);

                    $form->select('wait_assign')
                        ->disable()
                        ->options([
                            0 => '否', 1 => '是'
                        ]);

                    $form->select('is_disribut')
                        ->disable()
                        ->options([
                            0 => '否', 1 => '是'
                        ]);

                    $form->display('created_at');
                    $form->display('updated_at');
                });
            });

            $form->tab('详情', function (Form $form) {

                $form->column(12, function (Form $form) {
                    $form->text('info.service', '服务器')
                        ->disable();
                });
                $form->column(6, function (Form $form) {

                    $form->text('info.num', '产品价格')->disable();

                    $form->text('info.amount', '实际价格')->disable();

                    $form->text('info.amount_dollar', '美金价格')->disable();

                    $form->text('info.discount', '优惠折扣')->disable();

                    $form->text('info.service_charge', '服务费')->disable();

                    $form->text('info.coupon', '优惠券')->disable();
                });

                $form->column(6, function (Form $form) {
                    $form->text('info.pay_platform', '支付平台')->disable();
                    $form->text('info.payer_email', '付款邮箱')->disable();
                    $form->datetime('info.pay_time', '时间')->disable();
                    $form->select('info.terminal_platform', '终端平台')
                        ->options([
                            1 => 'PC',
                            2 => '安卓手机',
                            3 => '苹果手机',
                            4 => '平板'
                        ])
                        ->disable();
                    $form->datetime('info.processing_time', '处理时间')
                        ->disable();
                    $form->text('info.source', '订单来源')
                        ->disable();
                    $form->datetime('info.created_at ', '创建时间')
                        ->disable();
                });

            });

            $form->tab('明细', function (Form $form) {
                $form->hasMany('items', '商品', function (Form\NestedForm $form) {

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->text('goods_id', '产品编号')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->number('goods_no', '商品编号')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->number('goods_num', '商品数量')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->text('goods_name', '商品名称')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->text('goods_price', '商品价格')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->text('send_num', '发货数量')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->text('items_num', '金币物品')->disable();
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->select('is_del', '金币物品')->disable()->options(['0' => '正常', '1' => '删除']);
                    });

                    $form->column(4, function (Form\NestedForm $c) {
                        $c->datetime('deleted_at', '删除时间')->disable();
                    });

                });
            });
            $form->tab('商品', function (Form $form) {
            });

            //金币
            if ($form->model()->order_type == 1) {
                $form->tab('类型-金币', function (Form $form) {

                });
            } elseif ($form->model()->order_type == 2) {
                $form->tab('类型-物品', function (Form $form) {

                });
            } elseif ($form->model()->order_type == 3) {
                $form->tab('类型-代练', function (Form $form) {
                    $form->text('boost.created_at', '创建时间');
                    $form->textarea('boost.boost_addition', '代练信息')->disable();
                });
            } elseif ($form->model()->order_type == 4) {
                $form->tab('类型-综合', function (Form $form) {

                });
            } elseif ($form->model()->order_type == 5) {
                $form->tab('类型-账号', function (Form $form) {

                });
            }
            $form->tab('客户', function (Form $form) {

            });

            if ($form->model()->pay) {
                $form->tab('支付', function (Form $form) {
                    $form->text('pay.pay_id', '支付编号')->disable();
                    $form->text('pay.created_at', '支付时间')->disable();
                    $form->embeds('pay.pay_msg', '支付信息', function (Form\EmbeddedForm $form) {
                        $form->text('email', '邮箱')->disable();
                        $form->text('payee', '收款')->disable();
                        $form->text('amount', '金额')->disable();
                        $form->text('currency', '币种')->disable();
                        $form->text('trade_no', '单号')->disable();
                        $form->text('state', '状态')->disable();
                    });
                });
            }

            if ($form->model()->refund) {
                $form->tab('退款', function (Form $form) {
                    $form->column(6, function (Form $form) {
                        $form->select('refund.refund_reason', '退款原因')
                            ->disable()
                            ->options([
                                0 => '',
                                1 => '取消订单',
                                2 => '有货不愿意等（24小时内）',
                                3 => '没货（24小时内）',
                                4 => '没货（超24小时）',
                                5 => '争议/欺诈退款',
                                6 => '其他（需备注具体原因）',
                                7 => '重复单',
                                8 => '下错单',
                                9 => '不配合交易',
                                10 => '封号',
                                11 => '不愿意验证',
                                12 => '价格不合适',
                                13 => '网络问题',
                                14 => '账号密码错误'
                            ]);

                        $form->datetime('refund.created_at', '退款时间')
                            ->disable();
                    });
                    $form->column(6, function (Form $form) {
                        $form->text('refund.refund_money', '退款金额')
                            ->disable();
                        $form->text('refund.dispute_money', '欺诈金额')
                            ->disable();
                    });
                });
            }
        });
    }
}
