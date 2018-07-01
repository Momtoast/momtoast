    var fm_currentDate = new Date();
    var FormCurrency_10 = '';
    var FormPaypalTax_10 = '0';
    var check_submit10 = 0;
    var check_before_submit10 = {};
    var required_fields10 = ["1","6"];
    var labels_and_ids10 = {"1":"type_name","2":"type_submitter_mail","3":"type_text","4":"type_textarea","6":"type_captcha","5":"type_submit_reset"};
    var check_regExp_all10 = [];
    var check_paypal_price_min_max10 = [];
    var file_upload_check10 = [];
    var spinner_check10 = [];
    var scrollbox_trigger_point10 = '20';
    var header_image_animation10 = '';
    var scrollbox_loading_delay10 = '0';
    var scrollbox_auto_hide10 = '1';
         function before_load10()
{
     
}

 function before_submit10()
{
      }

 function before_reset10()
{
     
}
    function onload_js10() {
  jQuery("#wd_captcha10").click(function() {captcha_refresh("wd_captcha","10")});
  jQuery("#_element_refresh10").click(function() {captcha_refresh("wd_captcha","10")});
  captcha_refresh("wd_captcha", "10");
    }
    function condition_js10() {
    }
    function check_js10(id, form_id) {
    if (id != 0) {
    x = jQuery("#" + form_id + "form_view"+id);
    }
    else {
    x = jQuery("#form"+form_id);
    }    }
    function onsubmit_js10() {
    
  var disabled_fields = "";
  jQuery("#form10 div[wdid]").each(function() {
    if(jQuery(this).css("display") == "none") {
      disabled_fields += jQuery(this).attr("wdid");
      disabled_fields += ",";
    }
    if(disabled_fields) {
      jQuery("<input type=\"hidden\" name=\"disabled_fields10\" value =\""+disabled_fields+"\" />").appendTo("#form10");
    }
  });    }
    jQuery(window).load(function () {
    formOnload(10);
    });
    form_view_count10 = 0;
    jQuery(document).ready(function () {
    fm_document_ready(10);
    });
    