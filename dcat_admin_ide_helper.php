<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection migration
     * @property Grid\Column|Collection batch
     * @property Grid\Column|Collection ptype
     * @property Grid\Column|Collection v0
     * @property Grid\Column|Collection v1
     * @property Grid\Column|Collection v2
     * @property Grid\Column|Collection v3
     * @property Grid\Column|Collection v4
     * @property Grid\Column|Collection v5
     * @property Grid\Column|Collection create_time
     * @property Grid\Column|Collection update_time
     * @property Grid\Column|Collection delete_time
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection api_group
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection config_id
     * @property Grid\Column|Collection config_name
     * @property Grid\Column|Collection config_key
     * @property Grid\Column|Collection config_value
     * @property Grid\Column|Collection config_type
     * @property Grid\Column|Collection is_frontend
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection dept_id
     * @property Grid\Column|Collection dept_path
     * @property Grid\Column|Collection dept_name
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection leader
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection create_by
     * @property Grid\Column|Collection update_by
     * @property Grid\Column|Collection table_id
     * @property Grid\Column|Collection table_name
     * @property Grid\Column|Collection table_comment
     * @property Grid\Column|Collection class_name
     * @property Grid\Column|Collection tpl_category
     * @property Grid\Column|Collection package_name
     * @property Grid\Column|Collection module_name
     * @property Grid\Column|Collection business_name
     * @property Grid\Column|Collection function_name
     * @property Grid\Column|Collection function_author
     * @property Grid\Column|Collection pk_column
     * @property Grid\Column|Collection pk_go_field
     * @property Grid\Column|Collection pk_json_field
     * @property Grid\Column|Collection org_id
     * @property Grid\Column|Collection owner
     * @property Grid\Column|Collection column_id
     * @property Grid\Column|Collection column_name
     * @property Grid\Column|Collection column_comment
     * @property Grid\Column|Collection column_type
     * @property Grid\Column|Collection column_key
     * @property Grid\Column|Collection go_type
     * @property Grid\Column|Collection go_field
     * @property Grid\Column|Collection json_field
     * @property Grid\Column|Collection html_field
     * @property Grid\Column|Collection is_pk
     * @property Grid\Column|Collection is_increment
     * @property Grid\Column|Collection is_required
     * @property Grid\Column|Collection is_insert
     * @property Grid\Column|Collection is_edit
     * @property Grid\Column|Collection is_list
     * @property Grid\Column|Collection is_query
     * @property Grid\Column|Collection query_type
     * @property Grid\Column|Collection html_type
     * @property Grid\Column|Collection dict_type
     * @property Grid\Column|Collection link_table_name
     * @property Grid\Column|Collection link_table_class
     * @property Grid\Column|Collection link_table_package
     * @property Grid\Column|Collection link_label_id
     * @property Grid\Column|Collection link_label_name
     * @property Grid\Column|Collection dict_code
     * @property Grid\Column|Collection dict_sort
     * @property Grid\Column|Collection dict_label
     * @property Grid\Column|Collection dict_value
     * @property Grid\Column|Collection css_class
     * @property Grid\Column|Collection list_class
     * @property Grid\Column|Collection is_default
     * @property Grid\Column|Collection dict_id
     * @property Grid\Column|Collection dict_name
     * @property Grid\Column|Collection job_name
     * @property Grid\Column|Collection target_invoke
     * @property Grid\Column|Collection target_args
     * @property Grid\Column|Collection job_content
     * @property Grid\Column|Collection cron_expression
     * @property Grid\Column|Collection misfire_policy
     * @property Grid\Column|Collection entry_id
     * @property Grid\Column|Collection log_info
     * @property Grid\Column|Collection info_id
     * @property Grid\Column|Collection ipaddr
     * @property Grid\Column|Collection login_location
     * @property Grid\Column|Collection browser
     * @property Grid\Column|Collection os
     * @property Grid\Column|Collection platform
     * @property Grid\Column|Collection login_time
     * @property Grid\Column|Collection msg
     * @property Grid\Column|Collection oper_id
     * @property Grid\Column|Collection business_type
     * @property Grid\Column|Collection oper_name
     * @property Grid\Column|Collection oper_url
     * @property Grid\Column|Collection oper_ip
     * @property Grid\Column|Collection oper_location
     * @property Grid\Column|Collection oper_param
     * @property Grid\Column|Collection menu_name
     * @property Grid\Column|Collection component
     * @property Grid\Column|Collection is_iframe
     * @property Grid\Column|Collection is_link
     * @property Grid\Column|Collection menu_type
     * @property Grid\Column|Collection is_hide
     * @property Grid\Column|Collection is_keep_alive
     * @property Grid\Column|Collection is_affix
     * @property Grid\Column|Collection permission
     * @property Grid\Column|Collection notice_id
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection notice_type
     * @property Grid\Column|Collection user_name
     * @property Grid\Column|Collection organization_id
     * @property Grid\Column|Collection organization_path
     * @property Grid\Column|Collection organization_name
     * @property Grid\Column|Collection post_id
     * @property Grid\Column|Collection post_name
     * @property Grid\Column|Collection post_code
     * @property Grid\Column|Collection role_name
     * @property Grid\Column|Collection role_key
     * @property Grid\Column|Collection data_scope
     * @property Grid\Column|Collection role_sort
     * @property Grid\Column|Collection tenant_name
     * @property Grid\Column|Collection expire_time
     * @property Grid\Column|Collection nick_name
     * @property Grid\Column|Collection salt
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection role_ids
     * @property Grid\Column|Collection post_ids
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection account_id
     * @property Grid\Column|Collection domain_id
     * @property Grid\Column|Collection domain
     * @property Grid\Column|Collection cert_id
     * @property Grid\Column|Collection cert_sub_id
     * @property Grid\Column|Collection issuer
     * @property Grid\Column|Collection authority
     * @property Grid\Column|Collection signature
     * @property Grid\Column|Collection expire_at
     * @property Grid\Column|Collection device_id
     * @property Grid\Column|Collection image
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection game_id
     * @property Grid\Column|Collection game_sku
     * @property Grid\Column|Collection attempts
     * @property Grid\Column|Collection reserved_at
     * @property Grid\Column|Collection available_at
     * @property Grid\Column|Collection order_id
     * @property Grid\Column|Collection order_no
     * @property Grid\Column|Collection order_number
     * @property Grid\Column|Collection site_id
     * @property Grid\Column|Collection pay_status
     * @property Grid\Column|Collection send_status
     * @property Grid\Column|Collection order_status
     * @property Grid\Column|Collection is_scheduled
     * @property Grid\Column|Collection is_problem
     * @property Grid\Column|Collection problem_type
     * @property Grid\Column|Collection signer
     * @property Grid\Column|Collection signsend
     * @property Grid\Column|Collection order_type
     * @property Grid\Column|Collection is_old
     * @property Grid\Column|Collection is_urgent
     * @property Grid\Column|Collection isen_urgent
     * @property Grid\Column|Collection dispute_status
     * @property Grid\Column|Collection wait_assign
     * @property Grid\Column|Collection is_disribut
     * @property Grid\Column|Collection fx_uid
     * @property Grid\Column|Collection fx_status
     * @property Grid\Column|Collection affiliate_pay_type
     * @property Grid\Column|Collection fx_amount
     * @property Grid\Column|Collection boost_addition
     * @property Grid\Column|Collection admin_id
     * @property Grid\Column|Collection email_title
     * @property Grid\Column|Collection order_goods_id
     * @property Grid\Column|Collection goods_id
     * @property Grid\Column|Collection goods_no
     * @property Grid\Column|Collection goods_name
     * @property Grid\Column|Collection goods_num
     * @property Grid\Column|Collection goods_price
     * @property Grid\Column|Collection send_num
     * @property Grid\Column|Collection items_num
     * @property Grid\Column|Collection is_del
     * @property Grid\Column|Collection service
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection product_amount
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection discount
     * @property Grid\Column|Collection service_charge
     * @property Grid\Column|Collection coupon
     * @property Grid\Column|Collection pay_platform
     * @property Grid\Column|Collection terminal_platform
     * @property Grid\Column|Collection processing_time
     * @property Grid\Column|Collection source
     * @property Grid\Column|Collection amount_dollar
     * @property Grid\Column|Collection payer_email
     * @property Grid\Column|Collection pay_time
     * @property Grid\Column|Collection action_type
     * @property Grid\Column|Collection sub_type
     * @property Grid\Column|Collection pay_id
     * @property Grid\Column|Collection pay_msg
     * @property Grid\Column|Collection refund_reason
     * @property Grid\Column|Collection refund_money
     * @property Grid\Column|Collection dispute_money
     * @property Grid\Column|Collection desc
     * @property Grid\Column|Collection uid
     * @property Grid\Column|Collection country
     * @property Grid\Column|Collection first_name
     * @property Grid\Column|Collection last_name
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection country_name
     * @property Grid\Column|Collection region
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection zip
     * @property Grid\Column|Collection is_skype
     * @property Grid\Column|Collection is_whatsapp
     * @property Grid\Column|Collection discord
     * @property Grid\Column|Collection character_name
     * @property Grid\Column|Collection battle_id
     * @property Grid\Column|Collection real_name
     * @property Grid\Column|Collection login_num
     * @property Grid\Column|Collection is_multi
     * @property Grid\Column|Collection is_online
     * @property Grid\Column|Collection ip_firewall
     * @property Grid\Column|Collection work_status
     * @property Grid\Column|Collection last_login_time
     * @property Grid\Column|Collection dialling_code
     * @property Grid\Column|Collection img
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection symbol
     * @property Grid\Column|Collection rate
     * @property Grid\Column|Collection color_type
     * @property Grid\Column|Collection pk
     * @property Grid\Column|Collection event
     * @property Grid\Column|Collection area
     * @property Grid\Column|Collection user_agent
     * @property Grid\Column|Collection component_name
     * @property Grid\Column|Collection visible
     * @property Grid\Column|Collection keep_alive
     * @property Grid\Column|Collection always_show
     * @property Grid\Column|Collection message_type
     * @property Grid\Column|Collection site_name
     * @property Grid\Column|Collection site_url
     * @property Grid\Column|Collection site_logo
     * @property Grid\Column|Collection currencys
     * @property Grid\Column|Collection languages
     * @property Grid\Column|Collection site_remark
     * @property Grid\Column|Collection sku
     * @property Grid\Column|Collection qty
     * @property Grid\Column|Collection share_uid
     * @property Grid\Column|Collection grade
     * @property Grid\Column|Collection consume_money
     * @property Grid\Column|Collection non_money
     * @property Grid\Column|Collection freeze_money
     * @property Grid\Column|Collection payment
     * @property Grid\Column|Collection default_payment
     * @property Grid\Column|Collection is_affiliate
     * @property Grid\Column|Collection affiliate_audit
     * @property Grid\Column|Collection audit_admin
     * @property Grid\Column|Collection affiliate_scale
     * @property Grid\Column|Collection affiliate_email
     * @property Grid\Column|Collection affiliate_key
     * @property Grid\Column|Collection affiliate_time
     * @property Grid\Column|Collection account
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection social_media
     * @property Grid\Column|Collection last_login_ip
     * @property Grid\Column|Collection register_ip
     * @property Grid\Column|Collection register_time
     * @property Grid\Column|Collection skey
     * @property Grid\Column|Collection svalue
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection migration(string $label = null)
     * @method Grid\Column|Collection batch(string $label = null)
     * @method Grid\Column|Collection ptype(string $label = null)
     * @method Grid\Column|Collection v0(string $label = null)
     * @method Grid\Column|Collection v1(string $label = null)
     * @method Grid\Column|Collection v2(string $label = null)
     * @method Grid\Column|Collection v3(string $label = null)
     * @method Grid\Column|Collection v4(string $label = null)
     * @method Grid\Column|Collection v5(string $label = null)
     * @method Grid\Column|Collection create_time(string $label = null)
     * @method Grid\Column|Collection update_time(string $label = null)
     * @method Grid\Column|Collection delete_time(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection api_group(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection config_id(string $label = null)
     * @method Grid\Column|Collection config_name(string $label = null)
     * @method Grid\Column|Collection config_key(string $label = null)
     * @method Grid\Column|Collection config_value(string $label = null)
     * @method Grid\Column|Collection config_type(string $label = null)
     * @method Grid\Column|Collection is_frontend(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection dept_id(string $label = null)
     * @method Grid\Column|Collection dept_path(string $label = null)
     * @method Grid\Column|Collection dept_name(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection leader(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection create_by(string $label = null)
     * @method Grid\Column|Collection update_by(string $label = null)
     * @method Grid\Column|Collection table_id(string $label = null)
     * @method Grid\Column|Collection table_name(string $label = null)
     * @method Grid\Column|Collection table_comment(string $label = null)
     * @method Grid\Column|Collection class_name(string $label = null)
     * @method Grid\Column|Collection tpl_category(string $label = null)
     * @method Grid\Column|Collection package_name(string $label = null)
     * @method Grid\Column|Collection module_name(string $label = null)
     * @method Grid\Column|Collection business_name(string $label = null)
     * @method Grid\Column|Collection function_name(string $label = null)
     * @method Grid\Column|Collection function_author(string $label = null)
     * @method Grid\Column|Collection pk_column(string $label = null)
     * @method Grid\Column|Collection pk_go_field(string $label = null)
     * @method Grid\Column|Collection pk_json_field(string $label = null)
     * @method Grid\Column|Collection org_id(string $label = null)
     * @method Grid\Column|Collection owner(string $label = null)
     * @method Grid\Column|Collection column_id(string $label = null)
     * @method Grid\Column|Collection column_name(string $label = null)
     * @method Grid\Column|Collection column_comment(string $label = null)
     * @method Grid\Column|Collection column_type(string $label = null)
     * @method Grid\Column|Collection column_key(string $label = null)
     * @method Grid\Column|Collection go_type(string $label = null)
     * @method Grid\Column|Collection go_field(string $label = null)
     * @method Grid\Column|Collection json_field(string $label = null)
     * @method Grid\Column|Collection html_field(string $label = null)
     * @method Grid\Column|Collection is_pk(string $label = null)
     * @method Grid\Column|Collection is_increment(string $label = null)
     * @method Grid\Column|Collection is_required(string $label = null)
     * @method Grid\Column|Collection is_insert(string $label = null)
     * @method Grid\Column|Collection is_edit(string $label = null)
     * @method Grid\Column|Collection is_list(string $label = null)
     * @method Grid\Column|Collection is_query(string $label = null)
     * @method Grid\Column|Collection query_type(string $label = null)
     * @method Grid\Column|Collection html_type(string $label = null)
     * @method Grid\Column|Collection dict_type(string $label = null)
     * @method Grid\Column|Collection link_table_name(string $label = null)
     * @method Grid\Column|Collection link_table_class(string $label = null)
     * @method Grid\Column|Collection link_table_package(string $label = null)
     * @method Grid\Column|Collection link_label_id(string $label = null)
     * @method Grid\Column|Collection link_label_name(string $label = null)
     * @method Grid\Column|Collection dict_code(string $label = null)
     * @method Grid\Column|Collection dict_sort(string $label = null)
     * @method Grid\Column|Collection dict_label(string $label = null)
     * @method Grid\Column|Collection dict_value(string $label = null)
     * @method Grid\Column|Collection css_class(string $label = null)
     * @method Grid\Column|Collection list_class(string $label = null)
     * @method Grid\Column|Collection is_default(string $label = null)
     * @method Grid\Column|Collection dict_id(string $label = null)
     * @method Grid\Column|Collection dict_name(string $label = null)
     * @method Grid\Column|Collection job_name(string $label = null)
     * @method Grid\Column|Collection target_invoke(string $label = null)
     * @method Grid\Column|Collection target_args(string $label = null)
     * @method Grid\Column|Collection job_content(string $label = null)
     * @method Grid\Column|Collection cron_expression(string $label = null)
     * @method Grid\Column|Collection misfire_policy(string $label = null)
     * @method Grid\Column|Collection entry_id(string $label = null)
     * @method Grid\Column|Collection log_info(string $label = null)
     * @method Grid\Column|Collection info_id(string $label = null)
     * @method Grid\Column|Collection ipaddr(string $label = null)
     * @method Grid\Column|Collection login_location(string $label = null)
     * @method Grid\Column|Collection browser(string $label = null)
     * @method Grid\Column|Collection os(string $label = null)
     * @method Grid\Column|Collection platform(string $label = null)
     * @method Grid\Column|Collection login_time(string $label = null)
     * @method Grid\Column|Collection msg(string $label = null)
     * @method Grid\Column|Collection oper_id(string $label = null)
     * @method Grid\Column|Collection business_type(string $label = null)
     * @method Grid\Column|Collection oper_name(string $label = null)
     * @method Grid\Column|Collection oper_url(string $label = null)
     * @method Grid\Column|Collection oper_ip(string $label = null)
     * @method Grid\Column|Collection oper_location(string $label = null)
     * @method Grid\Column|Collection oper_param(string $label = null)
     * @method Grid\Column|Collection menu_name(string $label = null)
     * @method Grid\Column|Collection component(string $label = null)
     * @method Grid\Column|Collection is_iframe(string $label = null)
     * @method Grid\Column|Collection is_link(string $label = null)
     * @method Grid\Column|Collection menu_type(string $label = null)
     * @method Grid\Column|Collection is_hide(string $label = null)
     * @method Grid\Column|Collection is_keep_alive(string $label = null)
     * @method Grid\Column|Collection is_affix(string $label = null)
     * @method Grid\Column|Collection permission(string $label = null)
     * @method Grid\Column|Collection notice_id(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection notice_type(string $label = null)
     * @method Grid\Column|Collection user_name(string $label = null)
     * @method Grid\Column|Collection organization_id(string $label = null)
     * @method Grid\Column|Collection organization_path(string $label = null)
     * @method Grid\Column|Collection organization_name(string $label = null)
     * @method Grid\Column|Collection post_id(string $label = null)
     * @method Grid\Column|Collection post_name(string $label = null)
     * @method Grid\Column|Collection post_code(string $label = null)
     * @method Grid\Column|Collection role_name(string $label = null)
     * @method Grid\Column|Collection role_key(string $label = null)
     * @method Grid\Column|Collection data_scope(string $label = null)
     * @method Grid\Column|Collection role_sort(string $label = null)
     * @method Grid\Column|Collection tenant_name(string $label = null)
     * @method Grid\Column|Collection expire_time(string $label = null)
     * @method Grid\Column|Collection nick_name(string $label = null)
     * @method Grid\Column|Collection salt(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection role_ids(string $label = null)
     * @method Grid\Column|Collection post_ids(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection account_id(string $label = null)
     * @method Grid\Column|Collection domain_id(string $label = null)
     * @method Grid\Column|Collection domain(string $label = null)
     * @method Grid\Column|Collection cert_id(string $label = null)
     * @method Grid\Column|Collection cert_sub_id(string $label = null)
     * @method Grid\Column|Collection issuer(string $label = null)
     * @method Grid\Column|Collection authority(string $label = null)
     * @method Grid\Column|Collection signature(string $label = null)
     * @method Grid\Column|Collection expire_at(string $label = null)
     * @method Grid\Column|Collection device_id(string $label = null)
     * @method Grid\Column|Collection image(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection game_id(string $label = null)
     * @method Grid\Column|Collection game_sku(string $label = null)
     * @method Grid\Column|Collection attempts(string $label = null)
     * @method Grid\Column|Collection reserved_at(string $label = null)
     * @method Grid\Column|Collection available_at(string $label = null)
     * @method Grid\Column|Collection order_id(string $label = null)
     * @method Grid\Column|Collection order_no(string $label = null)
     * @method Grid\Column|Collection order_number(string $label = null)
     * @method Grid\Column|Collection site_id(string $label = null)
     * @method Grid\Column|Collection pay_status(string $label = null)
     * @method Grid\Column|Collection send_status(string $label = null)
     * @method Grid\Column|Collection order_status(string $label = null)
     * @method Grid\Column|Collection is_scheduled(string $label = null)
     * @method Grid\Column|Collection is_problem(string $label = null)
     * @method Grid\Column|Collection problem_type(string $label = null)
     * @method Grid\Column|Collection signer(string $label = null)
     * @method Grid\Column|Collection signsend(string $label = null)
     * @method Grid\Column|Collection order_type(string $label = null)
     * @method Grid\Column|Collection is_old(string $label = null)
     * @method Grid\Column|Collection is_urgent(string $label = null)
     * @method Grid\Column|Collection isen_urgent(string $label = null)
     * @method Grid\Column|Collection dispute_status(string $label = null)
     * @method Grid\Column|Collection wait_assign(string $label = null)
     * @method Grid\Column|Collection is_disribut(string $label = null)
     * @method Grid\Column|Collection fx_uid(string $label = null)
     * @method Grid\Column|Collection fx_status(string $label = null)
     * @method Grid\Column|Collection affiliate_pay_type(string $label = null)
     * @method Grid\Column|Collection fx_amount(string $label = null)
     * @method Grid\Column|Collection boost_addition(string $label = null)
     * @method Grid\Column|Collection admin_id(string $label = null)
     * @method Grid\Column|Collection email_title(string $label = null)
     * @method Grid\Column|Collection order_goods_id(string $label = null)
     * @method Grid\Column|Collection goods_id(string $label = null)
     * @method Grid\Column|Collection goods_no(string $label = null)
     * @method Grid\Column|Collection goods_name(string $label = null)
     * @method Grid\Column|Collection goods_num(string $label = null)
     * @method Grid\Column|Collection goods_price(string $label = null)
     * @method Grid\Column|Collection send_num(string $label = null)
     * @method Grid\Column|Collection items_num(string $label = null)
     * @method Grid\Column|Collection is_del(string $label = null)
     * @method Grid\Column|Collection service(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection product_amount(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection discount(string $label = null)
     * @method Grid\Column|Collection service_charge(string $label = null)
     * @method Grid\Column|Collection coupon(string $label = null)
     * @method Grid\Column|Collection pay_platform(string $label = null)
     * @method Grid\Column|Collection terminal_platform(string $label = null)
     * @method Grid\Column|Collection processing_time(string $label = null)
     * @method Grid\Column|Collection source(string $label = null)
     * @method Grid\Column|Collection amount_dollar(string $label = null)
     * @method Grid\Column|Collection payer_email(string $label = null)
     * @method Grid\Column|Collection pay_time(string $label = null)
     * @method Grid\Column|Collection action_type(string $label = null)
     * @method Grid\Column|Collection sub_type(string $label = null)
     * @method Grid\Column|Collection pay_id(string $label = null)
     * @method Grid\Column|Collection pay_msg(string $label = null)
     * @method Grid\Column|Collection refund_reason(string $label = null)
     * @method Grid\Column|Collection refund_money(string $label = null)
     * @method Grid\Column|Collection dispute_money(string $label = null)
     * @method Grid\Column|Collection desc(string $label = null)
     * @method Grid\Column|Collection uid(string $label = null)
     * @method Grid\Column|Collection country(string $label = null)
     * @method Grid\Column|Collection first_name(string $label = null)
     * @method Grid\Column|Collection last_name(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection country_name(string $label = null)
     * @method Grid\Column|Collection region(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection zip(string $label = null)
     * @method Grid\Column|Collection is_skype(string $label = null)
     * @method Grid\Column|Collection is_whatsapp(string $label = null)
     * @method Grid\Column|Collection discord(string $label = null)
     * @method Grid\Column|Collection character_name(string $label = null)
     * @method Grid\Column|Collection battle_id(string $label = null)
     * @method Grid\Column|Collection real_name(string $label = null)
     * @method Grid\Column|Collection login_num(string $label = null)
     * @method Grid\Column|Collection is_multi(string $label = null)
     * @method Grid\Column|Collection is_online(string $label = null)
     * @method Grid\Column|Collection ip_firewall(string $label = null)
     * @method Grid\Column|Collection work_status(string $label = null)
     * @method Grid\Column|Collection last_login_time(string $label = null)
     * @method Grid\Column|Collection dialling_code(string $label = null)
     * @method Grid\Column|Collection img(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection symbol(string $label = null)
     * @method Grid\Column|Collection rate(string $label = null)
     * @method Grid\Column|Collection color_type(string $label = null)
     * @method Grid\Column|Collection pk(string $label = null)
     * @method Grid\Column|Collection event(string $label = null)
     * @method Grid\Column|Collection area(string $label = null)
     * @method Grid\Column|Collection user_agent(string $label = null)
     * @method Grid\Column|Collection component_name(string $label = null)
     * @method Grid\Column|Collection visible(string $label = null)
     * @method Grid\Column|Collection keep_alive(string $label = null)
     * @method Grid\Column|Collection always_show(string $label = null)
     * @method Grid\Column|Collection message_type(string $label = null)
     * @method Grid\Column|Collection site_name(string $label = null)
     * @method Grid\Column|Collection site_url(string $label = null)
     * @method Grid\Column|Collection site_logo(string $label = null)
     * @method Grid\Column|Collection currencys(string $label = null)
     * @method Grid\Column|Collection languages(string $label = null)
     * @method Grid\Column|Collection site_remark(string $label = null)
     * @method Grid\Column|Collection sku(string $label = null)
     * @method Grid\Column|Collection qty(string $label = null)
     * @method Grid\Column|Collection share_uid(string $label = null)
     * @method Grid\Column|Collection grade(string $label = null)
     * @method Grid\Column|Collection consume_money(string $label = null)
     * @method Grid\Column|Collection non_money(string $label = null)
     * @method Grid\Column|Collection freeze_money(string $label = null)
     * @method Grid\Column|Collection payment(string $label = null)
     * @method Grid\Column|Collection default_payment(string $label = null)
     * @method Grid\Column|Collection is_affiliate(string $label = null)
     * @method Grid\Column|Collection affiliate_audit(string $label = null)
     * @method Grid\Column|Collection audit_admin(string $label = null)
     * @method Grid\Column|Collection affiliate_scale(string $label = null)
     * @method Grid\Column|Collection affiliate_email(string $label = null)
     * @method Grid\Column|Collection affiliate_key(string $label = null)
     * @method Grid\Column|Collection affiliate_time(string $label = null)
     * @method Grid\Column|Collection account(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection social_media(string $label = null)
     * @method Grid\Column|Collection last_login_ip(string $label = null)
     * @method Grid\Column|Collection register_ip(string $label = null)
     * @method Grid\Column|Collection register_time(string $label = null)
     * @method Grid\Column|Collection skey(string $label = null)
     * @method Grid\Column|Collection svalue(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection migration
     * @property Show\Field|Collection batch
     * @property Show\Field|Collection ptype
     * @property Show\Field|Collection v0
     * @property Show\Field|Collection v1
     * @property Show\Field|Collection v2
     * @property Show\Field|Collection v3
     * @property Show\Field|Collection v4
     * @property Show\Field|Collection v5
     * @property Show\Field|Collection create_time
     * @property Show\Field|Collection update_time
     * @property Show\Field|Collection delete_time
     * @property Show\Field|Collection path
     * @property Show\Field|Collection api_group
     * @property Show\Field|Collection method
     * @property Show\Field|Collection config_id
     * @property Show\Field|Collection config_name
     * @property Show\Field|Collection config_key
     * @property Show\Field|Collection config_value
     * @property Show\Field|Collection config_type
     * @property Show\Field|Collection is_frontend
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection dept_id
     * @property Show\Field|Collection dept_path
     * @property Show\Field|Collection dept_name
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection leader
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection email
     * @property Show\Field|Collection status
     * @property Show\Field|Collection create_by
     * @property Show\Field|Collection update_by
     * @property Show\Field|Collection table_id
     * @property Show\Field|Collection table_name
     * @property Show\Field|Collection table_comment
     * @property Show\Field|Collection class_name
     * @property Show\Field|Collection tpl_category
     * @property Show\Field|Collection package_name
     * @property Show\Field|Collection module_name
     * @property Show\Field|Collection business_name
     * @property Show\Field|Collection function_name
     * @property Show\Field|Collection function_author
     * @property Show\Field|Collection pk_column
     * @property Show\Field|Collection pk_go_field
     * @property Show\Field|Collection pk_json_field
     * @property Show\Field|Collection org_id
     * @property Show\Field|Collection owner
     * @property Show\Field|Collection column_id
     * @property Show\Field|Collection column_name
     * @property Show\Field|Collection column_comment
     * @property Show\Field|Collection column_type
     * @property Show\Field|Collection column_key
     * @property Show\Field|Collection go_type
     * @property Show\Field|Collection go_field
     * @property Show\Field|Collection json_field
     * @property Show\Field|Collection html_field
     * @property Show\Field|Collection is_pk
     * @property Show\Field|Collection is_increment
     * @property Show\Field|Collection is_required
     * @property Show\Field|Collection is_insert
     * @property Show\Field|Collection is_edit
     * @property Show\Field|Collection is_list
     * @property Show\Field|Collection is_query
     * @property Show\Field|Collection query_type
     * @property Show\Field|Collection html_type
     * @property Show\Field|Collection dict_type
     * @property Show\Field|Collection link_table_name
     * @property Show\Field|Collection link_table_class
     * @property Show\Field|Collection link_table_package
     * @property Show\Field|Collection link_label_id
     * @property Show\Field|Collection link_label_name
     * @property Show\Field|Collection dict_code
     * @property Show\Field|Collection dict_sort
     * @property Show\Field|Collection dict_label
     * @property Show\Field|Collection dict_value
     * @property Show\Field|Collection css_class
     * @property Show\Field|Collection list_class
     * @property Show\Field|Collection is_default
     * @property Show\Field|Collection dict_id
     * @property Show\Field|Collection dict_name
     * @property Show\Field|Collection job_name
     * @property Show\Field|Collection target_invoke
     * @property Show\Field|Collection target_args
     * @property Show\Field|Collection job_content
     * @property Show\Field|Collection cron_expression
     * @property Show\Field|Collection misfire_policy
     * @property Show\Field|Collection entry_id
     * @property Show\Field|Collection log_info
     * @property Show\Field|Collection info_id
     * @property Show\Field|Collection ipaddr
     * @property Show\Field|Collection login_location
     * @property Show\Field|Collection browser
     * @property Show\Field|Collection os
     * @property Show\Field|Collection platform
     * @property Show\Field|Collection login_time
     * @property Show\Field|Collection msg
     * @property Show\Field|Collection oper_id
     * @property Show\Field|Collection business_type
     * @property Show\Field|Collection oper_name
     * @property Show\Field|Collection oper_url
     * @property Show\Field|Collection oper_ip
     * @property Show\Field|Collection oper_location
     * @property Show\Field|Collection oper_param
     * @property Show\Field|Collection menu_name
     * @property Show\Field|Collection component
     * @property Show\Field|Collection is_iframe
     * @property Show\Field|Collection is_link
     * @property Show\Field|Collection menu_type
     * @property Show\Field|Collection is_hide
     * @property Show\Field|Collection is_keep_alive
     * @property Show\Field|Collection is_affix
     * @property Show\Field|Collection permission
     * @property Show\Field|Collection notice_id
     * @property Show\Field|Collection content
     * @property Show\Field|Collection notice_type
     * @property Show\Field|Collection user_name
     * @property Show\Field|Collection organization_id
     * @property Show\Field|Collection organization_path
     * @property Show\Field|Collection organization_name
     * @property Show\Field|Collection post_id
     * @property Show\Field|Collection post_name
     * @property Show\Field|Collection post_code
     * @property Show\Field|Collection role_name
     * @property Show\Field|Collection role_key
     * @property Show\Field|Collection data_scope
     * @property Show\Field|Collection role_sort
     * @property Show\Field|Collection tenant_name
     * @property Show\Field|Collection expire_time
     * @property Show\Field|Collection nick_name
     * @property Show\Field|Collection salt
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection role_ids
     * @property Show\Field|Collection post_ids
     * @property Show\Field|Collection token
     * @property Show\Field|Collection account_id
     * @property Show\Field|Collection domain_id
     * @property Show\Field|Collection domain
     * @property Show\Field|Collection cert_id
     * @property Show\Field|Collection cert_sub_id
     * @property Show\Field|Collection issuer
     * @property Show\Field|Collection authority
     * @property Show\Field|Collection signature
     * @property Show\Field|Collection expire_at
     * @property Show\Field|Collection device_id
     * @property Show\Field|Collection image
     * @property Show\Field|Collection url
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection game_id
     * @property Show\Field|Collection game_sku
     * @property Show\Field|Collection attempts
     * @property Show\Field|Collection reserved_at
     * @property Show\Field|Collection available_at
     * @property Show\Field|Collection order_id
     * @property Show\Field|Collection order_no
     * @property Show\Field|Collection order_number
     * @property Show\Field|Collection site_id
     * @property Show\Field|Collection pay_status
     * @property Show\Field|Collection send_status
     * @property Show\Field|Collection order_status
     * @property Show\Field|Collection is_scheduled
     * @property Show\Field|Collection is_problem
     * @property Show\Field|Collection problem_type
     * @property Show\Field|Collection signer
     * @property Show\Field|Collection signsend
     * @property Show\Field|Collection order_type
     * @property Show\Field|Collection is_old
     * @property Show\Field|Collection is_urgent
     * @property Show\Field|Collection isen_urgent
     * @property Show\Field|Collection dispute_status
     * @property Show\Field|Collection wait_assign
     * @property Show\Field|Collection is_disribut
     * @property Show\Field|Collection fx_uid
     * @property Show\Field|Collection fx_status
     * @property Show\Field|Collection affiliate_pay_type
     * @property Show\Field|Collection fx_amount
     * @property Show\Field|Collection boost_addition
     * @property Show\Field|Collection admin_id
     * @property Show\Field|Collection email_title
     * @property Show\Field|Collection order_goods_id
     * @property Show\Field|Collection goods_id
     * @property Show\Field|Collection goods_no
     * @property Show\Field|Collection goods_name
     * @property Show\Field|Collection goods_num
     * @property Show\Field|Collection goods_price
     * @property Show\Field|Collection send_num
     * @property Show\Field|Collection items_num
     * @property Show\Field|Collection is_del
     * @property Show\Field|Collection service
     * @property Show\Field|Collection num
     * @property Show\Field|Collection product_amount
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection discount
     * @property Show\Field|Collection service_charge
     * @property Show\Field|Collection coupon
     * @property Show\Field|Collection pay_platform
     * @property Show\Field|Collection terminal_platform
     * @property Show\Field|Collection processing_time
     * @property Show\Field|Collection source
     * @property Show\Field|Collection amount_dollar
     * @property Show\Field|Collection payer_email
     * @property Show\Field|Collection pay_time
     * @property Show\Field|Collection action_type
     * @property Show\Field|Collection sub_type
     * @property Show\Field|Collection pay_id
     * @property Show\Field|Collection pay_msg
     * @property Show\Field|Collection refund_reason
     * @property Show\Field|Collection refund_money
     * @property Show\Field|Collection dispute_money
     * @property Show\Field|Collection desc
     * @property Show\Field|Collection uid
     * @property Show\Field|Collection country
     * @property Show\Field|Collection first_name
     * @property Show\Field|Collection last_name
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection country_name
     * @property Show\Field|Collection region
     * @property Show\Field|Collection city
     * @property Show\Field|Collection zip
     * @property Show\Field|Collection is_skype
     * @property Show\Field|Collection is_whatsapp
     * @property Show\Field|Collection discord
     * @property Show\Field|Collection character_name
     * @property Show\Field|Collection battle_id
     * @property Show\Field|Collection real_name
     * @property Show\Field|Collection login_num
     * @property Show\Field|Collection is_multi
     * @property Show\Field|Collection is_online
     * @property Show\Field|Collection ip_firewall
     * @property Show\Field|Collection work_status
     * @property Show\Field|Collection last_login_time
     * @property Show\Field|Collection dialling_code
     * @property Show\Field|Collection img
     * @property Show\Field|Collection code
     * @property Show\Field|Collection symbol
     * @property Show\Field|Collection rate
     * @property Show\Field|Collection color_type
     * @property Show\Field|Collection pk
     * @property Show\Field|Collection event
     * @property Show\Field|Collection area
     * @property Show\Field|Collection user_agent
     * @property Show\Field|Collection component_name
     * @property Show\Field|Collection visible
     * @property Show\Field|Collection keep_alive
     * @property Show\Field|Collection always_show
     * @property Show\Field|Collection message_type
     * @property Show\Field|Collection site_name
     * @property Show\Field|Collection site_url
     * @property Show\Field|Collection site_logo
     * @property Show\Field|Collection currencys
     * @property Show\Field|Collection languages
     * @property Show\Field|Collection site_remark
     * @property Show\Field|Collection sku
     * @property Show\Field|Collection qty
     * @property Show\Field|Collection share_uid
     * @property Show\Field|Collection grade
     * @property Show\Field|Collection consume_money
     * @property Show\Field|Collection non_money
     * @property Show\Field|Collection freeze_money
     * @property Show\Field|Collection payment
     * @property Show\Field|Collection default_payment
     * @property Show\Field|Collection is_affiliate
     * @property Show\Field|Collection affiliate_audit
     * @property Show\Field|Collection audit_admin
     * @property Show\Field|Collection affiliate_scale
     * @property Show\Field|Collection affiliate_email
     * @property Show\Field|Collection affiliate_key
     * @property Show\Field|Collection affiliate_time
     * @property Show\Field|Collection account
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection social_media
     * @property Show\Field|Collection last_login_ip
     * @property Show\Field|Collection register_ip
     * @property Show\Field|Collection register_time
     * @property Show\Field|Collection skey
     * @property Show\Field|Collection svalue
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection migration(string $label = null)
     * @method Show\Field|Collection batch(string $label = null)
     * @method Show\Field|Collection ptype(string $label = null)
     * @method Show\Field|Collection v0(string $label = null)
     * @method Show\Field|Collection v1(string $label = null)
     * @method Show\Field|Collection v2(string $label = null)
     * @method Show\Field|Collection v3(string $label = null)
     * @method Show\Field|Collection v4(string $label = null)
     * @method Show\Field|Collection v5(string $label = null)
     * @method Show\Field|Collection create_time(string $label = null)
     * @method Show\Field|Collection update_time(string $label = null)
     * @method Show\Field|Collection delete_time(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection api_group(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection config_id(string $label = null)
     * @method Show\Field|Collection config_name(string $label = null)
     * @method Show\Field|Collection config_key(string $label = null)
     * @method Show\Field|Collection config_value(string $label = null)
     * @method Show\Field|Collection config_type(string $label = null)
     * @method Show\Field|Collection is_frontend(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection dept_id(string $label = null)
     * @method Show\Field|Collection dept_path(string $label = null)
     * @method Show\Field|Collection dept_name(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection leader(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection create_by(string $label = null)
     * @method Show\Field|Collection update_by(string $label = null)
     * @method Show\Field|Collection table_id(string $label = null)
     * @method Show\Field|Collection table_name(string $label = null)
     * @method Show\Field|Collection table_comment(string $label = null)
     * @method Show\Field|Collection class_name(string $label = null)
     * @method Show\Field|Collection tpl_category(string $label = null)
     * @method Show\Field|Collection package_name(string $label = null)
     * @method Show\Field|Collection module_name(string $label = null)
     * @method Show\Field|Collection business_name(string $label = null)
     * @method Show\Field|Collection function_name(string $label = null)
     * @method Show\Field|Collection function_author(string $label = null)
     * @method Show\Field|Collection pk_column(string $label = null)
     * @method Show\Field|Collection pk_go_field(string $label = null)
     * @method Show\Field|Collection pk_json_field(string $label = null)
     * @method Show\Field|Collection org_id(string $label = null)
     * @method Show\Field|Collection owner(string $label = null)
     * @method Show\Field|Collection column_id(string $label = null)
     * @method Show\Field|Collection column_name(string $label = null)
     * @method Show\Field|Collection column_comment(string $label = null)
     * @method Show\Field|Collection column_type(string $label = null)
     * @method Show\Field|Collection column_key(string $label = null)
     * @method Show\Field|Collection go_type(string $label = null)
     * @method Show\Field|Collection go_field(string $label = null)
     * @method Show\Field|Collection json_field(string $label = null)
     * @method Show\Field|Collection html_field(string $label = null)
     * @method Show\Field|Collection is_pk(string $label = null)
     * @method Show\Field|Collection is_increment(string $label = null)
     * @method Show\Field|Collection is_required(string $label = null)
     * @method Show\Field|Collection is_insert(string $label = null)
     * @method Show\Field|Collection is_edit(string $label = null)
     * @method Show\Field|Collection is_list(string $label = null)
     * @method Show\Field|Collection is_query(string $label = null)
     * @method Show\Field|Collection query_type(string $label = null)
     * @method Show\Field|Collection html_type(string $label = null)
     * @method Show\Field|Collection dict_type(string $label = null)
     * @method Show\Field|Collection link_table_name(string $label = null)
     * @method Show\Field|Collection link_table_class(string $label = null)
     * @method Show\Field|Collection link_table_package(string $label = null)
     * @method Show\Field|Collection link_label_id(string $label = null)
     * @method Show\Field|Collection link_label_name(string $label = null)
     * @method Show\Field|Collection dict_code(string $label = null)
     * @method Show\Field|Collection dict_sort(string $label = null)
     * @method Show\Field|Collection dict_label(string $label = null)
     * @method Show\Field|Collection dict_value(string $label = null)
     * @method Show\Field|Collection css_class(string $label = null)
     * @method Show\Field|Collection list_class(string $label = null)
     * @method Show\Field|Collection is_default(string $label = null)
     * @method Show\Field|Collection dict_id(string $label = null)
     * @method Show\Field|Collection dict_name(string $label = null)
     * @method Show\Field|Collection job_name(string $label = null)
     * @method Show\Field|Collection target_invoke(string $label = null)
     * @method Show\Field|Collection target_args(string $label = null)
     * @method Show\Field|Collection job_content(string $label = null)
     * @method Show\Field|Collection cron_expression(string $label = null)
     * @method Show\Field|Collection misfire_policy(string $label = null)
     * @method Show\Field|Collection entry_id(string $label = null)
     * @method Show\Field|Collection log_info(string $label = null)
     * @method Show\Field|Collection info_id(string $label = null)
     * @method Show\Field|Collection ipaddr(string $label = null)
     * @method Show\Field|Collection login_location(string $label = null)
     * @method Show\Field|Collection browser(string $label = null)
     * @method Show\Field|Collection os(string $label = null)
     * @method Show\Field|Collection platform(string $label = null)
     * @method Show\Field|Collection login_time(string $label = null)
     * @method Show\Field|Collection msg(string $label = null)
     * @method Show\Field|Collection oper_id(string $label = null)
     * @method Show\Field|Collection business_type(string $label = null)
     * @method Show\Field|Collection oper_name(string $label = null)
     * @method Show\Field|Collection oper_url(string $label = null)
     * @method Show\Field|Collection oper_ip(string $label = null)
     * @method Show\Field|Collection oper_location(string $label = null)
     * @method Show\Field|Collection oper_param(string $label = null)
     * @method Show\Field|Collection menu_name(string $label = null)
     * @method Show\Field|Collection component(string $label = null)
     * @method Show\Field|Collection is_iframe(string $label = null)
     * @method Show\Field|Collection is_link(string $label = null)
     * @method Show\Field|Collection menu_type(string $label = null)
     * @method Show\Field|Collection is_hide(string $label = null)
     * @method Show\Field|Collection is_keep_alive(string $label = null)
     * @method Show\Field|Collection is_affix(string $label = null)
     * @method Show\Field|Collection permission(string $label = null)
     * @method Show\Field|Collection notice_id(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection notice_type(string $label = null)
     * @method Show\Field|Collection user_name(string $label = null)
     * @method Show\Field|Collection organization_id(string $label = null)
     * @method Show\Field|Collection organization_path(string $label = null)
     * @method Show\Field|Collection organization_name(string $label = null)
     * @method Show\Field|Collection post_id(string $label = null)
     * @method Show\Field|Collection post_name(string $label = null)
     * @method Show\Field|Collection post_code(string $label = null)
     * @method Show\Field|Collection role_name(string $label = null)
     * @method Show\Field|Collection role_key(string $label = null)
     * @method Show\Field|Collection data_scope(string $label = null)
     * @method Show\Field|Collection role_sort(string $label = null)
     * @method Show\Field|Collection tenant_name(string $label = null)
     * @method Show\Field|Collection expire_time(string $label = null)
     * @method Show\Field|Collection nick_name(string $label = null)
     * @method Show\Field|Collection salt(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection role_ids(string $label = null)
     * @method Show\Field|Collection post_ids(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection account_id(string $label = null)
     * @method Show\Field|Collection domain_id(string $label = null)
     * @method Show\Field|Collection domain(string $label = null)
     * @method Show\Field|Collection cert_id(string $label = null)
     * @method Show\Field|Collection cert_sub_id(string $label = null)
     * @method Show\Field|Collection issuer(string $label = null)
     * @method Show\Field|Collection authority(string $label = null)
     * @method Show\Field|Collection signature(string $label = null)
     * @method Show\Field|Collection expire_at(string $label = null)
     * @method Show\Field|Collection device_id(string $label = null)
     * @method Show\Field|Collection image(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection game_id(string $label = null)
     * @method Show\Field|Collection game_sku(string $label = null)
     * @method Show\Field|Collection attempts(string $label = null)
     * @method Show\Field|Collection reserved_at(string $label = null)
     * @method Show\Field|Collection available_at(string $label = null)
     * @method Show\Field|Collection order_id(string $label = null)
     * @method Show\Field|Collection order_no(string $label = null)
     * @method Show\Field|Collection order_number(string $label = null)
     * @method Show\Field|Collection site_id(string $label = null)
     * @method Show\Field|Collection pay_status(string $label = null)
     * @method Show\Field|Collection send_status(string $label = null)
     * @method Show\Field|Collection order_status(string $label = null)
     * @method Show\Field|Collection is_scheduled(string $label = null)
     * @method Show\Field|Collection is_problem(string $label = null)
     * @method Show\Field|Collection problem_type(string $label = null)
     * @method Show\Field|Collection signer(string $label = null)
     * @method Show\Field|Collection signsend(string $label = null)
     * @method Show\Field|Collection order_type(string $label = null)
     * @method Show\Field|Collection is_old(string $label = null)
     * @method Show\Field|Collection is_urgent(string $label = null)
     * @method Show\Field|Collection isen_urgent(string $label = null)
     * @method Show\Field|Collection dispute_status(string $label = null)
     * @method Show\Field|Collection wait_assign(string $label = null)
     * @method Show\Field|Collection is_disribut(string $label = null)
     * @method Show\Field|Collection fx_uid(string $label = null)
     * @method Show\Field|Collection fx_status(string $label = null)
     * @method Show\Field|Collection affiliate_pay_type(string $label = null)
     * @method Show\Field|Collection fx_amount(string $label = null)
     * @method Show\Field|Collection boost_addition(string $label = null)
     * @method Show\Field|Collection admin_id(string $label = null)
     * @method Show\Field|Collection email_title(string $label = null)
     * @method Show\Field|Collection order_goods_id(string $label = null)
     * @method Show\Field|Collection goods_id(string $label = null)
     * @method Show\Field|Collection goods_no(string $label = null)
     * @method Show\Field|Collection goods_name(string $label = null)
     * @method Show\Field|Collection goods_num(string $label = null)
     * @method Show\Field|Collection goods_price(string $label = null)
     * @method Show\Field|Collection send_num(string $label = null)
     * @method Show\Field|Collection items_num(string $label = null)
     * @method Show\Field|Collection is_del(string $label = null)
     * @method Show\Field|Collection service(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection product_amount(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection discount(string $label = null)
     * @method Show\Field|Collection service_charge(string $label = null)
     * @method Show\Field|Collection coupon(string $label = null)
     * @method Show\Field|Collection pay_platform(string $label = null)
     * @method Show\Field|Collection terminal_platform(string $label = null)
     * @method Show\Field|Collection processing_time(string $label = null)
     * @method Show\Field|Collection source(string $label = null)
     * @method Show\Field|Collection amount_dollar(string $label = null)
     * @method Show\Field|Collection payer_email(string $label = null)
     * @method Show\Field|Collection pay_time(string $label = null)
     * @method Show\Field|Collection action_type(string $label = null)
     * @method Show\Field|Collection sub_type(string $label = null)
     * @method Show\Field|Collection pay_id(string $label = null)
     * @method Show\Field|Collection pay_msg(string $label = null)
     * @method Show\Field|Collection refund_reason(string $label = null)
     * @method Show\Field|Collection refund_money(string $label = null)
     * @method Show\Field|Collection dispute_money(string $label = null)
     * @method Show\Field|Collection desc(string $label = null)
     * @method Show\Field|Collection uid(string $label = null)
     * @method Show\Field|Collection country(string $label = null)
     * @method Show\Field|Collection first_name(string $label = null)
     * @method Show\Field|Collection last_name(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection country_name(string $label = null)
     * @method Show\Field|Collection region(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection zip(string $label = null)
     * @method Show\Field|Collection is_skype(string $label = null)
     * @method Show\Field|Collection is_whatsapp(string $label = null)
     * @method Show\Field|Collection discord(string $label = null)
     * @method Show\Field|Collection character_name(string $label = null)
     * @method Show\Field|Collection battle_id(string $label = null)
     * @method Show\Field|Collection real_name(string $label = null)
     * @method Show\Field|Collection login_num(string $label = null)
     * @method Show\Field|Collection is_multi(string $label = null)
     * @method Show\Field|Collection is_online(string $label = null)
     * @method Show\Field|Collection ip_firewall(string $label = null)
     * @method Show\Field|Collection work_status(string $label = null)
     * @method Show\Field|Collection last_login_time(string $label = null)
     * @method Show\Field|Collection dialling_code(string $label = null)
     * @method Show\Field|Collection img(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection symbol(string $label = null)
     * @method Show\Field|Collection rate(string $label = null)
     * @method Show\Field|Collection color_type(string $label = null)
     * @method Show\Field|Collection pk(string $label = null)
     * @method Show\Field|Collection event(string $label = null)
     * @method Show\Field|Collection area(string $label = null)
     * @method Show\Field|Collection user_agent(string $label = null)
     * @method Show\Field|Collection component_name(string $label = null)
     * @method Show\Field|Collection visible(string $label = null)
     * @method Show\Field|Collection keep_alive(string $label = null)
     * @method Show\Field|Collection always_show(string $label = null)
     * @method Show\Field|Collection message_type(string $label = null)
     * @method Show\Field|Collection site_name(string $label = null)
     * @method Show\Field|Collection site_url(string $label = null)
     * @method Show\Field|Collection site_logo(string $label = null)
     * @method Show\Field|Collection currencys(string $label = null)
     * @method Show\Field|Collection languages(string $label = null)
     * @method Show\Field|Collection site_remark(string $label = null)
     * @method Show\Field|Collection sku(string $label = null)
     * @method Show\Field|Collection qty(string $label = null)
     * @method Show\Field|Collection share_uid(string $label = null)
     * @method Show\Field|Collection grade(string $label = null)
     * @method Show\Field|Collection consume_money(string $label = null)
     * @method Show\Field|Collection non_money(string $label = null)
     * @method Show\Field|Collection freeze_money(string $label = null)
     * @method Show\Field|Collection payment(string $label = null)
     * @method Show\Field|Collection default_payment(string $label = null)
     * @method Show\Field|Collection is_affiliate(string $label = null)
     * @method Show\Field|Collection affiliate_audit(string $label = null)
     * @method Show\Field|Collection audit_admin(string $label = null)
     * @method Show\Field|Collection affiliate_scale(string $label = null)
     * @method Show\Field|Collection affiliate_email(string $label = null)
     * @method Show\Field|Collection affiliate_key(string $label = null)
     * @method Show\Field|Collection affiliate_time(string $label = null)
     * @method Show\Field|Collection account(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection social_media(string $label = null)
     * @method Show\Field|Collection last_login_ip(string $label = null)
     * @method Show\Field|Collection register_ip(string $label = null)
     * @method Show\Field|Collection register_time(string $label = null)
     * @method Show\Field|Collection skey(string $label = null)
     * @method Show\Field|Collection svalue(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
