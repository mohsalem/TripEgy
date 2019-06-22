
@extends('index')
@section('content')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.11769" type="text/javascript"></script>
<script type="text/javascript">
    JotForm.init(function(){
      setTimeout(function() {
          $('input_7').hint('ex: myname@example.com');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("10", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+10)});
 JotForm.displayLocalTime("hour_10", "min_10", "ampm_10");
      setTimeout(function() {
          $('input_12').hint('ex: 23');
       }, 20);
    /*INIT-END*/
    });

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Professional Event Registration","type":"control_head"},{"name":"submit","qid":"2","text":"Submit Form","type":"control_button"},{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},{"name":"name","qid":"4","text":"Name","type":"control_fullname"},{"name":"whoAre","qid":"5","text":"Who Are You?","type":"control_radio"},{"name":"companyName","qid":"6","text":"Company Name?","type":"control_textbox"},{"name":"email7","qid":"7","text":"E-mail","type":"control_email"},{"name":"phoneNumber8","qid":"8","text":"Phone Number","type":"control_phone"},{"name":"pageBreak","qid":"9","text":"Page Break","type":"control_pagebreak"},{"name":"dateConsidered","qid":"10","text":"Date Considered","type":"control_datetime"},{"name":"clickTo11","qid":"11","text":"Details of Your Event","type":"control_head"},{"name":"numberOf","qid":"12","text":"Number of Guests","type":"control_number"},{"name":"typeOf","qid":"13","text":"Type of Restaurant","type":"control_radio"},{"name":"desiredOptions","qid":"14","text":"Desired Options","type":"control_checkbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Professional Event Registration","type":"control_head"},{"name":"submit","qid":"2","text":"Submit Form","type":"control_button"},{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},{"name":"name","qid":"4","text":"Name","type":"control_fullname"},{"name":"whoAre","qid":"5","text":"Who Are You?","type":"control_radio"},{"name":"companyName","qid":"6","text":"Company Name?","type":"control_textbox"},{"name":"email7","qid":"7","text":"E-mail","type":"control_email"},{"name":"phoneNumber8","qid":"8","text":"Phone Number","type":"control_phone"},{"name":"pageBreak","qid":"9","text":"Page Break","type":"control_pagebreak"},{"name":"dateConsidered","qid":"10","text":"Date Considered","type":"control_datetime"},{"name":"clickTo11","qid":"11","text":"Details of Your Event","type":"control_head"},{"name":"numberOf","qid":"12","text":"Number of Guests","type":"control_number"},{"name":"typeOf","qid":"13","text":"Type of Restaurant","type":"control_radio"},{"name":"desiredOptions","qid":"14","text":"Desired Options","type":"control_checkbox"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.11769" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.11769" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.11769" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5cf39fbd544a5401541a4081"/>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-header-group {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-label {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      width: 690px;
    }
  
    .form-label-left,
    .form-label-right,
    .form-label-left.form-label-auto,
    .form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 14pxpx
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14pxpx
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14pxpx
    }
  
    .supernova .form-all, .form-all {
      background-color: ;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  } --}}
  
  {{-- /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style> --}}

{{-- <form class="jotform-form" action=/create_event method="post" enctype="multipart/form-data">
  {{ csrf_field() }} --}}
  
   <form action="/create_event" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    {{-- <div class="panel panel-info" >
                        <div class="panel-body">
                            <div class="form-group">
                                
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <a href="#" title="{{auth()->user()->name}}" class="thumbnail"><img src={{auth()->user()->user_image}} alt=" " /></a>
                                    </div>
                                
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-3"></div>
                          <div  class="panel panel-info col-md-6  panel-heading" > <h1 ><B>Add new Event</B></h1></div>
                        </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                        <div class="panel-heading">
                              <h3 class="panel-title"><label for="user_image" class="control-label panel-title"> Add Event picture</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="file" class="form-control" name="photo" id="photo">
                                    </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-3"></div>
                        </div> 
                        <div class="row">
                            <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="name" class="control-label panel-title">Add Event name</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name" id="name" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="name" class="control-label panel-title">Add Event Category</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="category" id="name" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="description" class="control-label panel-title">Add Event description</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="description" id="description"  >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="from" class="control-label panel-title">Add Start Time For Event </label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="date" class="form-control" name="from" id="from" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="to" class="control-label panel-title">Add End Time For Event </label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="date" class="form-control" name="to" id="to" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="deadline_date" class="control-label panel-title">Add Deadline Date For Event </label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="date" class="form-control" name="deadline_date" id="deadline_date" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="location" class="control-label panel-title">Add location for Event</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="location" id="location">
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="birthdate" class="control-label panel-title">Add location name for Event</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="location_name"  id="location_name" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="facility" class="control-label panel-title">Add facility of Event</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="facility"  id="facility" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class="panel panel-info col-md-6" >
                          <div class="panel-heading">
                              <h3 class="panel-title"><label for="max_bookings" class="control-label panel-title">Add maximum number of travellers</label></h3>
                          </div>
                          <div class="panel-body">
                              <div class="form-group">
                                  <div class="col-sm-10">
                                      <input type="" class="form-control" name="max_bookings"  id="max_bookings" >
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3"></div>
                      <div class=" col-md-6 border" >
                          
                              <div class="form-group">
                                  <div class=" ">
                                      <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                  </div>
                              </div>
                          
                      </div>
                  </div>
                  </div>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- for the session messages --}}
                @if (session()->has('message'))
                <div class="alert alert-success" role="alert">{{session()->get('message')}}</div>
                @endif
            </div>
  {{-- <input type="hidden" name="formID" value="91698177666578" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_1" class="form-header" data-component="header">
              Professional Event Registration
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3"> Gender </label>
        <div id="cid_3" class="form-input-wide">
          <select class="form-dropdown" id="input_3" name="q3_gender" style="width:85px" data-component="dropdown" aria-labelledby="label_3">
            <option value="">  </option>
            <option value="Mr."> Mr. </option>
            <option value="Mrs."> Mrs. </option>
            <option value="Ms."> Ms. </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="first_4"> Name </label>
        <div id="cid_4" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="first_4" name="q4_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="last_4" name="q4_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Who Are You? </label>
        <div id="cid_5" class="form-input-wide">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_0" name="q5_whoAre" value="Company" />
              <label id="label_input_5_0" for="input_5_0"> Company </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_1" name="q5_whoAre" value="Professional Club" />
              <label id="label_input_5_1" for="input_5_1"> Professional Club </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_2" name="q5_whoAre" value="Tourism Agency" />
              <label id="label_input_5_2" for="input_5_2"> Tourism Agency </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_3" name="q5_whoAre" value="Town Hall" />
              <label id="label_input_5_3" for="input_5_3"> Town Hall </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_4" name="q5_whoAre" value="Individual" />
              <label id="label_input_5_4" for="input_5_4"> Individual </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_5" name="q5_whoAre" value="Other" />
              <label id="label_input_5_5" for="input_5_5"> Other </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Company Name? </label>
        <div id="cid_6" class="form-input-wide">
          <input type="text" id="input_6" name="q6_companyName" data-type="input-textbox" class="form-textbox" size="32" value="" placeholder=" " data-component="textbox" aria-labelledby="label_6" />
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> E-mail </label>
        <div id="cid_7" class="form-input-wide">
          <input type="email" id="input_7" name="q7_email7" class="form-textbox validate[Email]" size="32" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_7" />
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8_area"> Phone Number </label>
        <div id="cid_8" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="input_8_area" name="q8_phoneNumber8[area]" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_8 sublabel_8_area" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_8_area" id="sublabel_8_area" style="min-height:13px"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="input_8_phone" name="q8_phoneNumber8[phone]" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_8 sublabel_8_phone" />
              <label class="form-sub-label" for="input_8_phone" id="sublabel_8_phone" style="min-height:13px"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>
      <li id="cid_9" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container">
            <button id="form-pagebreak-back_9" type="button" class="form-pagebreak-back " data-component="pagebreak-back">
              Back
            </button>
          </div>
          <div class="form-pagebreak-next-container">
            <button id="form-pagebreak-next_9" type="button" class="form-pagebreak-next " data-component="pagebreak-next">
              Go to Event Details
            </button>
          </div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_9">
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li id="cid_11" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_11" class="form-header" data-component="header">
              Details of Your Event
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line allowTime" data-type="control_datetime" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="month_10"> Date Considered </label>
        <div id="cid_10" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[limitDate]" id="month_10" name="q10_dateConsidered[month]" size="2" data-maxlength="2" value="06" aria-labelledby="label_10 sublabel_10_month" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="month_10" id="sublabel_10_month" style="min-height:13px"> Month </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_10" name="q10_dateConsidered[day]" size="2" data-maxlength="2" value="19" aria-labelledby="label_10 sublabel_10_day" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="day_10" id="sublabel_10_day" style="min-height:13px"> Day </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[limitDate]" id="year_10" name="q10_dateConsidered[year]" size="4" data-maxlength="4" value="2019" aria-labelledby="label_10 sublabel_10_year" />
              <label class="form-sub-label" for="year_10" id="sublabel_10_year" style="min-height:13px"> Year </label>
            </span>
            <span style="white-space:nowrap;display:inline-block" class="allowTime-container">
              <span class="form-sub-label-container" style="vertical-align:top">
                <div id="at_10">
                  at
                </div>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <select class="currentTime time-dropdown form-dropdown validate[limitDate]" id="hour_10" name="q10_dateConsidered[hour]" aria-labelledby="label_10 sublabel_10_hour">
                  <option>  </option>
                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                  <option value="4"> 4 </option>
                  <option value="5"> 5 </option>
                  <option value="6"> 6 </option>
                  <option value="7"> 7 </option>
                  <option value="8"> 8 </option>
                  <option selected="" value="9"> 9 </option>
                  <option value="10"> 10 </option>
                  <option value="11"> 11 </option>
                  <option value="12"> 12 </option>
                </select>
                <span class="date-separate" aria-hidden="true">
                   :
                </span>
                <label class="form-sub-label" for="hour_10" id="sublabel_10_hour" style="min-height:13px"> Hour </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <select class="time-dropdown form-dropdown validate[limitDate]" id="min_10" name="q10_dateConsidered[min]" aria-labelledby="label_10 sublabel_10_minutes">
                  <option>  </option>
                  <option value="00"> 00 </option>
                  <option selected="" value="10"> 10 </option>
                  <option value="20"> 20 </option>
                  <option value="30"> 30 </option>
                  <option value="40"> 40 </option>
                  <option value="50"> 50 </option>
                </select>
                <label class="form-sub-label" for="min_10" id="sublabel_10_minutes" style="min-height:13px"> Minutes </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <select class="time-dropdown form-dropdown validate[limitDate]" id="ampm_10" name="q10_dateConsidered[ampm]" aria-labelledby="label_10 sublabel_10_ampm">
                  <option value="AM"> AM </option>
                  <option selected="" value="PM"> PM </option>
                </select>
                <label class="form-sub-label" for="ampm_10" id="sublabel_10_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap"> AM/PM Option </label>
              </span>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <img class="showAutoCalendar" alt="Pick a Date" id="input_10_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;margin-left:5px" data-component="datetime" aria-hidden="true" />
              <label class="form-sub-label" for="input_10_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap"> Date Picker Icon </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Number of Guests </label>
        <div id="cid_12" class="form-input-wide">
          <input type="number" id="input_12" name="q12_numberOf" data-type="input-number" class=" form-number-input form-textbox validate[Numeric]" style="width:60px" size="5" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_12" />
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Type of Restaurant </label>
        <div id="cid_13" class="form-input-wide">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_0" name="q13_typeOf" value="Buffet" />
              <label id="label_input_13_0" for="input_13_0"> Buffet </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_1" name="q13_typeOf" value="Dinner" />
              <label id="label_input_13_1" for="input_13_1"> Dinner </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_2" name="q13_typeOf" value="Cocktail" />
              <label id="label_input_13_2" for="input_13_2"> Cocktail </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14_0"> Desired Options </label>
        <div id="cid_14" class="form-input-wide">
          <div class="form-single-column" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_0" name="q14_desiredOptions[]" value="Floral Decoration" />
              <label id="label_input_14_0" for="input_14_0"> Floral Decoration </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_1" name="q14_desiredOptions[]" value="Chair Covers" />
              <label id="label_input_14_1" for="input_14_1"> Chair Covers </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_2" name="q14_desiredOptions[]" value="DJ" />
              <label id="label_input_14_2" for="input_14_2"> DJ </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_3" name="q14_desiredOptions[]" value="Jazz Trio" />
              <label id="label_input_14_3" for="input_14_3"> Jazz Trio </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_4" name="q14_desiredOptions[]" value="Piano Bar" />
              <label id="label_input_14_4" for="input_14_4"> Piano Bar </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_5" name="q14_desiredOptions[]" value="Photographer" />
              <label id="label_input_14_5" for="input_14_5"> Photographer </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_6" name="q14_desiredOptions[]" value="Hostess" />
              <label id="label_input_14_6" for="input_14_6"> Hostess </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_14_7" name="q14_desiredOptions[]" value="Transportation" />
              <label id="label_input_14_7" for="input_14_7"> Transportation </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-none" data-component="button">
              Submit Form
            </button>
          </div>
        </div>
      </li>

    </ul>
  </div>

</form> --}}
@endsection