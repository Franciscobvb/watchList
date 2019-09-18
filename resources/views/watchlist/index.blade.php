<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Watch List - My Nikken</title>
        <link rel="shortcut icon" type="image/x-icon" href="https://www.nikken.com/themes_wordpress_/images/icons/nikken_logo.ico"> 
	    <meta name="msapplication-TileImage" content="http://www.nikkentechnologies.com/images/nikken_144x144.png"/>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href="{{asset('wlassets/css/gallery-materialize.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav class="nav-extended">
            <div class="nav-background">
                <div class="pattern active"></div>
            </div>
            <div class="nav-wrapper container">
                <div class="nav-header center">
                    <img src="https://nettrax.myvoffice.com/nikkenusa-iact-test/custom/nikken/assets/images/2MyNikken_logo.png">
                </div>
            </div>
            <div class="categories-wrapper cyan">
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li class="active">
                        <a href="javascript:void(0)">home</a>
                    </li>
                    <li>
                        <a class='dropdown-trigger' href='#' data-target='feature-dropdown'>
                            My Business
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class='dropdown-trigger' href='#' data-target='feature-dropdown2'>
                            Ordering
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class='dropdown-trigger' href='#' data-target='feature-dropdown3'>
                            Information Center
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class='dropdown-trigger' href='#' data-target='feature-dropdown4'>
                            Recognition
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
                <ul id='feature-dropdown' class='dropdown-content'>
                    <li><a href="javascript:void(0)">Fullscreen Header</a></li>
                    <li><a href="javascript:void(0)">Horizontal Style</a></li>
                    <li><a href="javascript:void(0)">No Image Expand</a></li>
                </ul>
                <ul id='feature-dropdown2' class='dropdown-content'>
                    <li><a href="javascript:void(0)">Fullscreen Header</a></li>
                    <li><a href="javascript:void(0)">Horizontal Style</a></li>
                    <li><a href="javascript:void(0)">No Image Expand</a></li>
                </ul>
                <ul id='feature-dropdown3' class='dropdown-content'>
                    <li><a href="javascript:void(0)">Fullscreen Header</a></li>
                    <li><a href="javascript:void(0)">Horizontal Style</a></li>
                    <li><a href="javascript:void(0)">No Image Expand</a></li>
                </ul>
                <ul id='feature-dropdown4' class='dropdown-content'>
                    <li><a href="javascript:void(0)">Fullscreen Header</a></li>
                    <li><a href="javascript:void(0)">Horizontal Style</a></li>
                    <li><a href="javascript:void(0)">No Image Expand</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="nav-mobile">
            <li class="active"><a href="index.html"><i class="material-icons">camera</i>home</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">brightness_3</i>My Business</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">edit</i>Ordering</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">school</i>Docs</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">fullscreen</i>Information Center</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">swap_horiz</i>Recognition</a></li>
        </ul>
        <div id="portfolio" class="section ">
            <div class="container">
                <div class="gallery row">
                    <div class="col l12 m12 s12 gallery-item polygon">
                        <ul class="collapsible collapsible-accordion">
                            <li class="active">
                                <div class="collapsible-header" tabindex="0">
                                <i class="material-icons">expand_more</i>Watch List (Click here)</div>
                                <div class="collapsible-body">
                                <span>
                                    The watch list allows you to specify members that you want to monitor in your organization. If you know their ID you can add them below, or you can click on the add icon on any of the genealogy reports.
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="icon_prefix" type="text" class="autocomplete">
                                            <label for="icon_prefix">Member ID:</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <a class="waves-effect waves-light btn"><i class="material-icons left">search</i>Add</a>
                                        </div>
                                    </div>
                                </span>
                                </div>
                            </li>
                        </ul>
                        <ul class="collapsible collapsible-accordion">
                            <li class="active">
                                <div class="collapsible-header" tabindex="0">
                                <i class="material-icons">expand_more</i>Format (Click here)</div>
                                <div class="collapsible-body">
                                    <div class="row">
                                        <div class="col l3 m3 s3">
                                            <label>Font Size</label>
                                            <select class="browser-default">
                                                <option value="8">8pt</option>
                                                <option value="9">9pt</option>
                                                <option value="10">10pt</option>
                                                <option value="11">11pt</option>
                                                <option value="12">12pt</option>
                                                <option value="13">13pt</option>
                                                <option value="14">14pt</option>
                                            </select>
                                            Display Borders?
                                            <p>
                                                <label>
                                                    <input name="group1" type="radio" />
                                                    <span>Yes</span>
                                                </label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label>
                                                    <input name="group1" type="radio" />
                                                    <span>Yellow</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col l3 m3 s3">
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked"/>
                                                    <span>Line Number</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Levels </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" disabled/>
                                                    <span>Name</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox"/>
                                                    <span>Co-Applicant Name </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked"/>
                                                    <span>Consultant ID</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Sponsor ID </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox"/>
                                                    <span>Entry Date </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox"/>
                                                    <span>Last Order Date </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox"/>
                                                    <span>Months Inactive</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked"/>
                                                    <span>Renewal Date</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col l3 m3 s3">
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Evening Phone</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Day Phone</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Fax </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Address</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>City </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>State </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Zip/Postal Code </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Country</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Marketing Unit </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Consultant Status </span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col l3 m3 s3">
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Rank </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Paid Rank </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Autoship</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Millionaire's Club</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Humans Being More</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>Lifestyle Bonus\Home Program</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" />
                                                    <span>E-mail Address</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Period July 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Period August 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Period September 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" />
                                                    <span>Display QOPV Data (not included in save report option, use update report to view without QOPV)</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    Your options can be saved as the defaults for the genealogy report. <br>
                                    <button class="btn waves-effect waves-light" type="" name="action">Save Options
                                        <i class="material-icons right">save</i>
                                    </button>
                                    <button class="btn waves-effect waves-light" type="" name="action">Update Watch List
                                        <i class="material-icons right">update</i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <ul class="collapsible collapsible-accordion">
                            <li class="active">
                                <div class="collapsible-header" tabindex="0">
                                <i class="material-icons">expand_more</i>Info (Click here)</div>
                                <div class="collapsible-body">
                                    <p>PPV: Personal Point Volume</p>
                                    <p>PGPV: Personal Group Point Volume</p>
                                    <p>OPV: Organizational Point Volume</p>
                                    <p>OPV-OPL: Organizational Point Volume Outside Primary Leg</p>
                                    <p>OPV-OP&SL: Organizational Point Volume Outside Primary & Secondary Leg</p>
                                    <br>
                                    <div class="row">
                                        <div class="col s12" style="overflow: scroll; height: 800px;">
                                            <p>PPV is the accumulated point volume of product orders placed under a Consultant’s distributorship account. If Worldwide view is selected, the link is not active.</p>
                                            <table class="responsive-table highlight bordered">
                                                <tbody>
                                                    <tr valign="bottom">
                                                        <th class="gen" rowspan="2">Line
                                                            <br>Num</th>
                                                        <th class="gen" rowspan="2">LV</th>
                                                        <th class="gen" rowspan="2">Remove</th>
                                                        <th class="gen" rowspan="2">Name</th>
                                                        <th class="gen" rowspan="2">Address</th>
                                                        <th class="gen" rowspan="2">Country</th>
                                                        <th class="gen" rowspan="2">Dist ID</th>
                                                        <th class="gen" rowspan="2">
                                            
                                                            Sponsor ID
                                                        </th>
                                                        <th class="gen" rowspan="2">Renewal Date</th>
                                                        <th class="gen" rowspan="2">Day Phone</th>
                                                        <th class="gen" rowspan="2">Evening Phone</th>
                                                        <th class="gen" rowspan="2">Rank</th>
                                                        <th class="gen" rowspan="2">Paid Rank</th>
                                                        <th class="gen" colspan="5" nowrap="">
                                                            July 2019
                                                        </th>
                                            
                                                        <th class="gen" colspan="5" nowrap="">
                                                            August 2019
                                                        </th>
                                            
                                                        <th class="gen" colspan="5" nowrap="">
                                                            September 2019
                                                        </th>
                                            
                                                    </tr>
                                                    <tr>
                                                        <th class="gen">PGPV</th>
                                                        <th class="gen">PPV</th>
                                                        <th class="gen">OPV</th>
                                                        <th class="gen">OPV-OPL</th>
                                                        <th class="gen">OPV-OPL&amp;SL</th>
                                                        <th class="gen">PGPV</th>
                                                        <th class="gen">PPV</th>
                                                        <th class="gen">OPV</th>
                                                        <th class="gen">OPV-OPL</th>
                                                        <th class="gen">OPV-OPL&amp;SL</th>
                                                        <th class="gen">PGPV</th>
                                                        <th class="gen">PPV</th>
                                                        <th class="gen">OPV</th>
                                                        <th class="gen">OPV-OPL</th>
                                                        <th class="gen">OPV-OPL&amp;SL</th>
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">1</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=28162400">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            World Wellness Inc
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            889 Brantley Dr
                                                            <br> Longwood, FL 32779-3519
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=28162400"> 28162400 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">06/27/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=28162400"> 4074979679 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=28162400"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            ROY</td>
                                            
                                                        <td class="gen" align="center">
                                                            DIA</td>
                                            
                                                        <td class="gen" align="right">
                                                            1,006.10
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=28162400&amp;pvdate=201907">
                                                            1,006.10 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">533,270.02</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            1,009.70
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=28162400&amp;pvdate=201908">
                                                            1,009.70 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">600,320.55</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">222,738.98</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">2</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=29336500">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Albert Enterprises, Inc.
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            1510 W Spirit Drive
                                                            <br> Anthem, AZ 85086-3930
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=29336500"> 29336500 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">07/14/2014</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=29336500"> 8185190693 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=29336500"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">3</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=30282200">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Thomson, Marcia R.
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            1427 Rockledge Lane Apt 2
                                                            <br> Walnut Creek, CA 94595-2421
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=30282200"> 30282200 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">07/28/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=30282200"> 9252164486 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=30282200"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            PLT</td>
                                            
                                                        <td class="gen" align="center">
                                                            SIL</td>
                                            
                                                        <td class="gen" align="right">
                                                            312.42
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=30282200&amp;pvdate=201907">
                                                            312.42 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">770.26</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            341.86
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=30282200&amp;pvdate=201908">
                                                            341.86 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">606.67</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            439.40
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=30282200&amp;pvdate=201909">
                                                            147.60 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">621.78</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">4</td>
                                                        <td class="gen" align="center">
                                                            0</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=14960100">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Rapp, Herb Martin
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            761 Vegas Valley Dr
                                                            <br> Las Vegas, NV 89109-1528
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=867329900"> 867329900 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">11/17/2019</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 7703541446 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 7703541446 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            ROY</td>
                                            
                                                        <td class="gen" align="center">
                                                            DIA</td>
                                            
                                                        <td class="gen" align="right">
                                                            2,738.83
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=14960100&amp;pvdate=201907">
                                                            1,186.70 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">649,574.11</td>
                                                        <td class="gen" align="right">138.24</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            5,743.13
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=14960100&amp;pvdate=201908">
                                                            4,008.50 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">710,512.71</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            656.80
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=14960100&amp;pvdate=201909">
                                                            290.80 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">267,421.44</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">5</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=170900500">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Sendejas, Salvador
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            1614 Calle De Oro
                                                            <br> Thousand Oaks, CA 91360-7011
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=170900500"> 170900500 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">05/21/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=170900500"> 8055238488 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=170900500"> 8185548668 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            PLT</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            430.86
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=170900500&amp;pvdate=201907">
                                                            119.73 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">2,144.65</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            232.20
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">1,135.49</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            323.10
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=170900500&amp;pvdate=201909">
                                                            90.90 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">1,233.54</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">6</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=18240603">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            VARGAS LIGARRETO, LUIS CARLOS
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            Kra 35 B #1-07
                                                            <br> BOGOTA, COL
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">COL&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=18240603"> 18240603 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=18240603"> 12022559 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=18240603"> 17561280 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">7</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=28162400">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            World Wellness Inc
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            889 Brantley Dr
                                                            <br> Longwood, FL 32779-3519
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=28162400"> 28162400 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">06/27/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=28162400"> 4074979679 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=28162400"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            ROY</td>
                                            
                                                        <td class="gen" align="center">
                                                            DIA</td>
                                            
                                                        <td class="gen" align="right">
                                                            1,006.10
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=28162400&amp;pvdate=201907">
                                                            1,006.10 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">533,270.02</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            1,009.70
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=28162400&amp;pvdate=201908">
                                                            1,009.70 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">600,320.55</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">222,738.98</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">8</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=777367400">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Stewart, Sandra D
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            917 74th St NE #1
                                                            <br> Cedar Rapids IA 52402
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=777367400"> 777367400 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">03/26/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=777367400"> (319) 294-3598 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=777367400"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            EXC</td>
                                            
                                                        <td class="gen" align="center">
                                                            EXC</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            117.00
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=777367400&amp;pvdate=201908">
                                                            117.00 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">117.00</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">9</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=785622500">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Smoyak, Shirley
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            4 Roney Rd
                                                            <br> Edison, NJ 08820-3208
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=785622500"> 785622500 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">07/15/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=785622500"> 7325483473 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=785622500"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            EXC</td>
                                            
                                                        <td class="gen" align="center">
                                                            EXC</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            187.00
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=785622500&amp;pvdate=201908">
                                                            187.00 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">187.00</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">10</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=813217700">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Live Well Solutions LLC
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            2873 Seahorse Avenue
                                                            <br> Ventura, CA 93001-4149
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=813217700"> 813217700 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">05/07/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=813217700"> 7073641919 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=813217700"> 7073641919 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            PLT</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            365.64
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">758.64</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">255.40</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            323.50
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=813217700&amp;pvdate=201909">
                                                            153.80 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">543.50</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">11</td>
                                                        <td class="gen" align="center">
                                                            2</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=817986000">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Coussa, Maria
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            1630 W Covina Blvd Spc 33
                                                            <br> San Dimas, CA 91773-3435
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=817986000"> 817986000 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=170900500"> 170900500 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">01/27/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=817986000"> 7143931135 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=817986000"> 7606007006 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            PLT</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            51.60
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=817986000&amp;pvdate=201907">
                                                            20.10 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">1,046.93</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            37.80
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=817986000&amp;pvdate=201908">
                                                            6.30 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">285.73</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            43.50
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=817986000&amp;pvdate=201909">
                                                            12.00 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">584.14</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">12</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=869710700">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Hunter Arianna Partners
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            13654 Red Hill Ave Apt L
                                                            <br> Tustin, CA 92780-4767
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=869710700"> 869710700 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">12/04/2019</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=869710700"> 8478096305 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=869710700"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            DIA</td>
                                            
                                                        <td class="gen" align="center">
                                                            DIA</td>
                                            
                                                        <td class="gen" align="right">
                                                            1,772.60
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=869710700&amp;pvdate=201907">
                                                            1,004.00 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">106,432.65</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            1,006.20
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=869710700&amp;pvdate=201908">
                                                            430.20 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">100,075.44</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            27.10
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">40,488.28</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                            
                                                    <tr class="row1" valign="bottom">
                                                        <td class="gen" align="center">13</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=869813900">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Van Cronkhite, Janice
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            463 Metropolitan Pl SE
                                                            <br> Atlanta, GA 30316-1601
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">USA&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=869813900"> 869813900 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">12/21/2018</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=869813900"> 6782306932 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=869813900"> 6782306932 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                                    
                                                    <tr class="row2" valign="bottom">
                                                        <td class="gen" align="center">18</td>
                                                        <td class="gen" align="center">
                                                            1</td>
                                            
                                                        <td class="gen" align="center">
                                                            <a href="gen.cfm?report=watchlist&amp;removeWatch=true&amp;watchID=873125200">
                                                                <img src="http://nettrax.myvoffice.com/nikkenusa/images/remove.gif" alt="Remove from Watch List" title="Remove from Watch List" width="17" height="17" border="0"></a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="">
                                                            Scarff, June M
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            388 Basinview Dr
                                                            <br> Bedford, NS B4A 3R3
                                                            <br>
                                                        </td>
                                            
                                                        <td class="gen" align="center">CAN&nbsp;</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=873125200"> 873125200 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=14960100"> 14960100 </a>
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">01/29/2020</td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=873125200"> 9024480499 </a> &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" nowrap="" align="center">
                                                            <a href="perinfo.cfm?distid2=873125200"> </a>
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                                            SIL</td>
                                            
                                                        <td class="gen" align="center">
                                                            DD</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            196.40
                                                        </td>
                                            
                                                        <td class="gen" align="right">
                                            
                                                            <a href="acctgen.cfm?DISTID2=873125200&amp;pvdate=201908">
                                                            5.40 </a>
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">196.40</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                        <td class="gen" align="right">
                                                            &nbsp;
                                                        </td>
                                            
                                                        <td class="gen" align="center">
                                            
                                                            &nbsp;
                                            
                                                        </td>
                                            
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                                        <td class="gen" align="right">&nbsp;</td>
                                            
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('wlassets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('wlassets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('wlassets/js/materialize.min.js')}}"></script>
    <script src="{{asset('wlassets/js/color-thief.min.js')}}"></script>
    <script src="{{asset('wlassets/js/galleryExpand.js')}}"></script>
    <script src="{{asset('wlassets/js/init.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('input.autocomplete').autocomplete({
                data: {
                    "Alex Rodriguez": null,
                    "Francisco Melcor": null,
                    "Abi Escobar": null,
                    "Luis Miros": null,
                    "Veronica Mendoza": null,
                    "Emmanuel Gomez": null,
                    "Erick Gonzalez": null,
                },
            });
        });
    </script>
</html>
