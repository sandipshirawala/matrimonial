<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE HTML>
<html>
   <head>
      <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
      <?php 
         include_once('head_file.php');
      ?>
   </head>
   <body>
      <!-- ============================  Navigation Start =========================== -->
      <?php 
         include_once('header.php');
      ?>
      <!-- ============================  Navigation End ============================ -->
      <?php 
         //include_once('banner_view.php');
         //include_once('slider_view.php');
      ?>
      <div class="grid_3">
         <div class="container">
            <div class="breadcrumb1">
               <ul>
                  <a href="index.html"><i class="fa fa-home home_1"></i></a>
                  <span class="divider">&nbsp;|&nbsp;</span>
                  <li class="current-page">Regular Search</li>
               </ul>
            </div>
            <!--<script type="text/javascript">
               $(function () {
                $('#btnRadio').click(function () {
                     var checkedradio = $('[name="gr"]:radio:checked').val();
                     $("#sel").html("Selected Value: " + checkedradio);
                 });
               });
               </script>-->
            <div class="col-md-9 search_left">
               <form>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Name : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_name" id="txt_name"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Gender : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" id="rdo_gender" name="rdo_gender" value="male" class="radio_1" checked="checked"/> Male &nbsp;&nbsp;
                        <input type="radio" id="rdo_gender" name="rdo_gender" value="female" class="radio_1"  /> Female
                        <!--<hr />
                           <p id="sel"></p><br />
                           <input id="btnRadio" type="button" value="Get Selected Value" />-->
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Marital Status : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status" value="Single"  checked="checked" /> Single &nbsp;&nbsp;
                        <input type="radio" class="radio_1"  id="rdo_marital_status" name="rdo_marital_status" value="Divorced"/> Divorced &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status"  value="Widowed" /> Widowed &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status"  value="Separated" /> Separated &nbsp;&nbsp;
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Country : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_country" name="cmb_country" onchange="get_state(this.value)">
                              <option>--Select Any--</option>
                              <?php 
                              $country_res=$this->db->get("tbl_country");
                              foreach($country_res->result() as $country_row)
                              {
                                 ?>
                                 <option value='<?php echo $country_row->country_id; ?>'><?php echo $country_row->country_name; ?></option>
                                 <?php
                              }
                              ?>
                           </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">State : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select style="color:black" id="cmb_state" name="cmb_state" onchange="get_city(this.value)">
                              <option>--Select Any--</option>
                           </select> 
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">District / City : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_city" name="cmb_city">
                              <option>--Select Any--</option>
                           </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                 
                  
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Show Profile : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="checkbox" class="radio_1" /> with Photo &nbsp;&nbsp;
                        <input type="checkbox" class="radio_1" checked="checked" /> with Horoscope
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Don't Show : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="checkbox" class="radio_1" /> Ignored Profiles &nbsp;&nbsp;
                        <input type="checkbox" class="radio_1" checked="checked" /> Profiles already Contacted
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Age : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="col-sm-5 input-group1">
                           <input class="form-control has-dark-background" name="28" id="slider-name" placeholder="28" type="text" required="">
                        </div>
                        <div class="col-sm-5 input-group1">
                           <input class="form-control has-dark-background" name="40" id="slider-name" placeholder="40" type="text" required="">
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </form>
               <div class="paid_people">
                  <h1>Paid People</h1>
                  <div class="row_1">
                     <div class="col-sm-6 paid_people-left">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a5.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a6.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="row_1">
                     <div class="col-sm-6 paid_people-left">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a7.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a8.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="row_2">
                     <div class="col-sm-6 paid_people-left">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a5.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a4.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 match_right">
               <div class="profile_search1">
                  <form>
                     <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
                     <input type="submit" value="Go">
                  </form>
               </div>
               <section class="slider">
                  <h3>Happy Marriage</h3>
                  <div class="flexslider">
                     <ul class="slides">
                        <li>
                           <img src="images/s2.jpg" alt=""/>
                           <h4>Lorem & Ipsum</h4>
                           <p>It is a long established fact that a reader will be distracted by the readable</p>
                        </li>
                        <li>
                           <img src="images/s1.jpg" alt=""/>
                           <h4>Lorem & Ipsum</h4>
                           <p>It is a long established fact that a reader will be distracted by the readable</p>
                        </li>
                        <li>
                           <img src="images/s3.jpg" alt=""/>
                           <h4>Lorem & Ipsum</h4>
                           <p>It is a long established fact that a reader will be distracted by the readable</p>
                        </li>
                     </ul>
                  </div>
               </section>
               <div class="view_profile view_profile2">
                  <h3>View Similar Profiles</h3>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p5.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p6.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p7.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p8.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <?php 
         include_once('footer.php');
      ?>
   </body>
</html>

<script type="text/javascript">
            var controller = "ajax/get_caste";
            var base_url = "<?php echo base_url(); ?>";

     function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }

    function get_state(primary_id)
    {       
        var strURL=base_url+"user_ajax/get_state"+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_state").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function get_city(primary_id)
    {       
        var strURL=base_url+"user_ajax/get_city"+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_city").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function get_edit_data(primary_id)
    {       
        var strURL=base_url+controller+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("edit_div").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    
</script>

