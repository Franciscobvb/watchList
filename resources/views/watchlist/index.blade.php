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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
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
                    <li><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">6</a></li>
                    <li><a href="javascript:void(0)">7</a></li>
                    <li><a href="javascript:void(0)">8</a></li>
                    <li><a href="javascript:void(0)">9</a></li>
                    <li><a href="javascript:void(0)">10</a></li>
                    <li><a href="javascript:void(0)">11</a></li>
                </ul>
                <ul id='feature-dropdown2' class='dropdown-content'>
                    <li><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">6</a></li>
                </ul>
                <ul id='feature-dropdown3' class='dropdown-content'>
                    <li><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">6</a></li>
                    <li><a href="javascript:void(0)">7</a></li>
                    <li><a href="javascript:void(0)">8</a></li>
                    <li><a href="javascript:void(0)">9</a></li>
                </ul>
                <ul id='feature-dropdown4' class='dropdown-content'>
                    <li><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">6</a></li>
                    <li><a href="javascript:void(0)">7</a></li>
                    <li><a href="javascript:void(0)">8</a></li>
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
                                    </span>
                                    <div class="row">
                                        <form action="{!! url('/watchlist/addAsoc') !!}" name="addAsoc" id="addAsoc" method="GET">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" hidden></input>
                                                <input id="associated" name="associated" type="text" class="autocomplete">
                                                <label for="associated">Member ID:</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <button type="submit" class="waves-effect waves-light btn" id="sendForm">
                                                    <i class="material-icons right">person_add</i>
                                                    Add
                                                </button>
                                                <a class="waves-effect waves-light btn" onclick="reloadReport()">
                                                    <i class="material-icons right">sync</i>
                                                    Reload report
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="collapsible collapsible-accordion">
                            <li class="">
                                <div class="collapsible-header" tabindex="0">
                                <i class="material-icons">expand_more</i>Format (Click here)</div>
                                <div class="collapsible-body">
                                    <div class="row list_view">
                                        <div class="col l3 m3 s3">
                                            Display Borders?
                                            <p>
                                                <label>
                                                    <input name="group1" type="radio" />
                                                    <span>Yes</span>
                                                </label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label>
                                                    <input name="group1" type="radio" />
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col l3 m3 s3">
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" data-target ="1"/>
                                                    <span>Line Number</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" data-target ="2"/>
                                                    <span>Levels </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" disabled data-target ="3"/>
                                                    <span>Name</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target =""/>
                                                    <span>Co-Applicant Name </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" data-target ="4"/>
                                                    <span>Consultant ID</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked"/>
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
                                                    <input type="checkbox" checked="checked" data-target ="6"/>
                                                    <span>Evening Phone</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" data-target ="7"/>
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
                                                    <input type="checkbox" checked="checked" data-target ="8"/>
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
                                                    <input type="checkbox" checked="checked"/>
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
                                                    <input type="checkbox" checked="checked"/>
                                                    <span>Rank </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked" data-target ="9"/>
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
                                                    <input type="checkbox" checked="checked"/>
                                                    <span>Period July 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked"/>
                                                    <span>Period August 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" checked="checked"/>
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
                            <li class="">
                                <div class="collapsible-header" tabindex="0">
                                <i class="material-icons">expand_more</i>Info (Click here)</div>
                                <div class="collapsible-body">
                                    <p>PPV: Personal Point Volume</p>
                                    <p>PGPV: Personal Group Point Volume</p>
                                    <p>OPV: Organizational Point Volume</p>
                                    <p>OPV-OPL: Organizational Point Volume Outside Primary Leg</p>
                                    <p>OPV-OP&SL: Organizational Point Volume Outside Primary & Secondary Leg</p>
                                    <br>
                                    <p>PPV is the accumulated point volume of product orders placed under a Consultant’s distributorship account. If Worldwide view is selected, the link is not active.</p>
                                    
                                    <div class="row">
                                        <div class="col s12" style="overflow: scroll; height: auto;">
                                            <table id="example" class="display" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th>Remove</th>
                                                        <th>Line<br>num</th>
                                                        <th>LV</th>
                                                        <th>Name</th>
                                                        <th>Dist ID</th>
                                                        <th>Email</th>
                                                        <th>Mobile #</th>
                                                        <th>Alternative #</th>
                                                        <th>Country</th>
                                                        <th>Pay Rank</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Remove</th>
                                                        <th>Line<br>num</th>
                                                        <th>LV</th>
                                                        <th>Name</th>
                                                        <th>Dist ID</th>
                                                        <th>Email</th>
                                                        <th>Mobile #</th>
                                                        <th>Alternative #</th>
                                                        <th>Country</th>
                                                        <th>Pay Rank</th>
                                                    </tr>
                                                </tfoot>
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{asset('wlassets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('wlassets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('wlassets/js/materialize.min.js')}}"></script>
    <script src="{{asset('wlassets/js/color-thief.min.js')}}"></script>
    <script src="{{asset('wlassets/js/galleryExpand.js')}}"></script>
    <script src="{{asset('wlassets/js/init.js')}}"></script>
    <script src="{{asset('wlassets/js/custom.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src=" https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js "></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
</html>
