@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')


<div class='row-fluid create' id='content-wrapper'>
    <div class='span12'>
        <div class="row-fluid">
            <div class='page-header'>
                <h3 class='pull-left'>
                    <i class='icon-cog'></i>
                    <span>Settings</span>
                </h3>
            </div> <!--/.page-header-->
        </div> <!--/.row-fluid-->

        <div class='row-fluid'>
            <div class='span12 box user-settings' style='margin-bottom: 0'>
                <div class='box-content'>
                    <form accept-charset="UTF-8" action="#" class="form" method="post" style="margin-bottom: 0;"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>

                        <div class='row-fluid'>
                            <div class='span8'>
                                
                                <div class='control-group'>
                                    <h2>BizGym Version</h2>
                                    <label class='control-label' for='inputText'>Which version of BizGym would you like to use?</label>
                                    <div class='controls'>


                                        <div class='switch switch-large' data-off-label='<i class="icon-gamepad"></i> Kids' data-on-label='<i class="icon-ok"></i> Full'>
                                            <input type='checkbox' checked>
                                        </div>

                                       
                                    </div>
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <h2>Language</h2>
                                    <label class='control-label' for='inputText'>Which language would you like to use BizGym in?</label>
                                    <div class='controls'>
                                        <select name='language' id='DropDownLanguage'>
                                            <option>English</option>
                                            <option>French</option>
                                            <option>Spanish</option>
                                            <option>Italian</option>
                                            <option>Korean</option>
                                            <option>Japanese</option>
                                            <option>Vietnamese</option>
                                            <option>Portuguese</option>
                                        </select>
                                    </div>
                                </div><!--/.control-group-->


                                <div class='control-group'>
                                    <h2>Timezone</h2>
                                    <label class='control-label' for='inputText'>What timezone would you like your times to be displayed with?</label>
                                    <div class='controls'>
                                        <select name="DropDownTimezone" id="DropDownTimezone">
                                          <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
                                          <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
                                          <option value="-10.0">(GMT -10:00) Hawaii</option>
                                          <option value="-9.0">(GMT -9:00) Alaska</option>
                                          <option value="-8.0">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                          <option value="-7.0">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                          <option value="-6.0">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                          <option value="-5.0">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                          <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                          <option value="-3.5">(GMT -3:30) Newfoundland</option>
                                          <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                          <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
                                          <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
                                          <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                          <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
                                          <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
                                          <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                          <option value="3.5">(GMT +3:30) Tehran</option>
                                          <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                          <option value="4.5">(GMT +4:30) Kabul</option>
                                          <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                          <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                          <option value="5.75">(GMT +5:45) Kathmandu</option>
                                          <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                          <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                          <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                          <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                          <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
                                          <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                          <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                          <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                        </select>
                                    </div><!--/.controls-->
                                </div><!--/.control-group-->

                                <div class='control-group'>
                                    <h2>Resources</h2>
                                    <label class='control-label' for='inputText'>By default, woudld you like the resources to be open for the Vision section content?</label>
                                    <div class='controls'>
                                        <div class='switch switch-large' data-off-label='<i class="icon-remove"></i> No' data-on-label='<i class="icon-ok"></i> Yes'>
                                            <input type='checkbox' checked>
                                        </div>
                                    </div>
                                </div><!--/.control-group-->


                                <div class='row-fluid'>
                                    <h2>Email Notifications</h2>
                                    <p>Decide which events you would like to receive email notifications for.</p>
                                </div><!--/.row-fluid-->
                                <div class='notifications'>
                                    <div class='control-group'>
                                        <label class='control-label' for='inputText'>Messages</label>
                                        <div class='controls'>
                                            <div class='row-fluid'>
                                                <div class='switch switch-large' data-off-label='<i class="icon-remove"></i> No' data-on-label='<i class="icon-ok"></i> Yes'>
                                                    <input type='checkbox' checked>
                                                </div> <!--/.switch-->

                                                <select name='language' class='notification-frequency'id='DropDownLanguage'>
                                                        <option>Immediately</option>
                                                        <option>Once a day</option>
                                                        <option>Once a week</option>
                                                        <option>Once a month</option>
                                                </select>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->
                                    
                                    <div class='control-group'>
                                        <label class='control-label' for='inputText'>Tasks</label>
                                        <div class='controls'>
                                            <div class='row-fluid'>
                                                <div class='switch switch-large' data-off-label='<i class="icon-remove"></i> No' data-on-label='<i class="icon-ok"></i> Yes'>
                                                    <input type='checkbox' checked>
                                                </div> <!--/.switch-->

                                                <select name='language' class='notification-frequency'id='DropDownLanguage'>
                                                        <option>Immediately</option>
                                                        <option>Once a day</option>
                                                        <option>Once a week</option>
                                                        <option>Once a month</option>
                                                </select>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->

                                    <div class='control-group'>
                                        <label class='control-label' for='inputText'>Forum Replies</label>
                                        <div class='controls'>
                                            <div class='row-fluid'>
                                                <div class='switch switch-large' data-off-label='<i class="icon-remove"></i> No' data-on-label='<i class="icon-ok"></i> Yes'>
                                                    <input type='checkbox' checked>
                                                </div> <!--/.switch-->

                                                <select name='language' class='notification-frequency'id='DropDownLanguage'>
                                                        <option>Immediately</option>
                                                        <option>Once a day</option>
                                                        <option>Once a week</option>
                                                        <option>Once a month</option>
                                                </select>
                                            </div><!--/.row-fluid-->
                                        </div><!--/.controls-->
                                    </div><!--/.control-group-->
                                </div><!--/.notifications-->


                                <div class='control-group'>
                                    <h2>Cancel Account</h2>
                                    <label class='control-label' for='inputText'>Do you want to cancel your BizGym Account? You cannot undo this.</label>
                                    <div class='controls'>
                                        <a class='btn btn-default shift-down'>Cancel My Account</a>
                                    </div>
                                </div><!--/.control-group-->



                            </div><!--./span8-->

                        </div><!--/.row-fluid-->

                        <div class='row-fluid'>
                            <div class='span12'>
                                <div class='btn-group'>
                                    <a class='btn btn-large btn-success' id='save-settings'><i class='icon-save'></i> Save Settings</a>
                                </div><!--/.btn-group-->
                            </div><!--/.span12-->
                        </div><!--/.row-fluid-->

                    </form>
                </div><!--/.box-contnet-->
            </div><!--/.span12 box-->
        </div><!--/.row-fluid-->
    </div><!--/.span12-->
</div><!--/.row-fluid create #/content-wrapper-->

@stop

@section('inline_scripts')
@parent
$('.user-action-btn').click(function(){
    var target = $(this).attr('rel'),
        
        confirmed = confirm('Are you sure you want to cancel your account?')
    
})
@stop