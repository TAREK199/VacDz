@extends('layout')

@section('active')
class="active"
@endsection
@section('content')
<!-- content -->
    <div class="container-fluid">
<div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list ">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Rechercher..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Accueil</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">enfant</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!--table-->
<div class="container-fluid">
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                
                                <div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bs-bars pull-left"><div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div></div><div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="paginationSwitch" aria-label="pagination Switch" title="Hide/Show pagination"><i class="glyphicon glyphicon-collapse-down icon-chevron-down"></i></button><button class="btn btn-default" type="button" name="refresh" aria-label="refresh" title="Refresh"><i class="glyphicon glyphicon-refresh icon-refresh"></i></button><button class="btn btn-default" type="button" name="toggle" aria-label="toggle" title="Toggle"><i class="glyphicon glyphicon-list-alt icon-list-alt"></i></button><div class="keep-open btn-group" title="Columns"><button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem"><label><input type="checkbox" data-field="id" value="1" checked="checked"> ID</label></li><li role="menuitem"><label><input type="checkbox" data-field="name" value="2" checked="checked"> Task</label></li><li role="menuitem"><label><input type="checkbox" data-field="email" value="3" checked="checked"> Email</label></li><li role="menuitem"><label><input type="checkbox" data-field="phone" value="4" checked="checked"> Phone</label></li><li role="menuitem"><label><input type="checkbox" data-field="complete" value="5" checked="checked"> Completed</label></li><li role="menuitem"><label><input type="checkbox" data-field="task" value="6" checked="checked"> Task</label></li><li role="menuitem"><label><input type="checkbox" data-field="date" value="7" checked="checked"> Date</label></li><li role="menuitem"><label><input type="checkbox" data-field="price" value="8" checked="checked"> Price</label></li><li role="menuitem"><label><input type="checkbox" data-field="action" value="9" checked="checked"> Action</label></li></ul></div><div class="export btn-group"><button class="btn btn-default dropdown-toggle" aria-label="export type" title="Export data" data-toggle="dropdown" type="button" aria-expanded="false"><i class="glyphicon glyphicon-export icon-share"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" data-type="json"><a href="javascript:void(0)">JSON</a></li><li role="menuitem" data-type="xml"><a href="javascript:void(0)">XML</a></li><li role="menuitem" data-type="csv"><a href="javascript:void(0)">CSV</a></li><li role="menuitem" data-type="txt"><a href="javascript:void(0)">TXT</a></li><li role="menuitem" data-type="sql"><a href="javascript:void(0)">SQL</a></li><li role="menuitem" data-type="excel"><a href="javascript:void(0)">MS-Excel</a></li></ul></div></div><div class="pull-right search"><input class="form-control" type="text" placeholder="Search"></div></div><div class="fixed-table-container" style="padding-bottom: 0px;"><div class="fixed-table-header" style="display: none;"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 41px;">Loading, please wait...</div><div class="JCLRgrips" style="width: 1059px;"><div class="JCLRgrip" style="left: 37px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 75px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 272px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 446px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 605px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 712px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 770px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 903px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 1003px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip JCLRLastGrip" style="left: 1076px; height: 411px;"></div></div><table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-hover JColResizer" style="margin-top: 0px;">
                                    <thead style="display: table-header-group;"><tr><th class="bs-checkbox " style="width: 3.4%;" data-field="state" tabindex="0"><div class="th-inner "><input name="btSelectAll" type="checkbox"></div><div class="fht-cell"></div></th><th style="width: 3.6%;" data-field="id" tabindex="0"><div class="th-inner ">ID</div><div class="fht-cell"></div></th><th style="width: 18.4%;" data-field="name" tabindex="0"><div class="th-inner ">Task</div><div class="fht-cell"></div></th><th style="width: 16.1%;" data-field="email" tabindex="0"><div class="th-inner ">Email</div><div class="fht-cell"></div></th><th style="width: 14.7%;" data-field="phone" tabindex="0"><div class="th-inner ">Phone</div><div class="fht-cell"></div></th><th style="width: 10%;" data-field="complete" tabindex="0"><div class="th-inner ">Completed</div><div class="fht-cell"></div></th><th style="width: 5.4%;" data-field="task" tabindex="0"><div class="th-inner ">Task</div><div class="fht-cell"></div></th><th style="width: 12.3%;" data-field="date" tabindex="0"><div class="th-inner ">Date</div><div class="fht-cell"></div></th><th style="width: 9.3%;" data-field="price" tabindex="0"><div class="th-inner ">Price</div><div class="fht-cell"></div></th><th style="width: 6.7%;" data-field="action" tabindex="0"><div class="th-inner ">Action</div><div class="fht-cell"></div></th></tr></thead>
                                    <tbody><tr data-index="0"> <td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td> <td style="">1</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Web Development" class="editable editable-click">Web Development</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="admin@uttara.com" class="editable editable-click">admin@uttara.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962067309" class="editable editable-click">+8801962067309</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">1/6</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 14.928203230275509 4 Z" fill="#006DF0"></path><path d="M 8 8 L 14.928203230275509 4 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="10%" class="editable editable-click">10%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="Jul 14, 2017" class="editable editable-click">Jul 14, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$5455" class="editable editable-click">$5455</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="1"> <td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td> <td style="">2</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Graphic Design" class="editable editable-click">Graphic Design</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="fox@itpark.com" class="editable editable-click">fox@itpark.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801762067304" class="editable editable-click">+8801762067304</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">230/360</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 1 1 1.8716444550481768 13.142300877492316 Z" fill="#006DF0"></path><path d="M 8 8 L 1.8716444550481768 13.142300877492316 A 8 8 0 0 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="70%" class="editable editable-click">70%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="fab 2, 2017" class="editable editable-click">fab 2, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$8756" class="editable editable-click">$8756</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="2"> <td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td> <td style="">3</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Software Development" class="editable editable-click">Software Development</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="gumre@hash.com" class="editable editable-click">gumre@hash.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801862067308" class="editable editable-click">+8801862067308</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">0.42/1.461</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.779260448975975 9.86630835260364 Z" fill="#006DF0"></path><path d="M 8 8 L 15.779260448975975 9.86630835260364 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="5%" class="editable editable-click">5%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="Seb 5, 2017" class="editable editable-click">Seb 5, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$9875" class="editable editable-click">$9875</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="3"> <td class="bs-checkbox "><input data-index="3" name="btSelectItem" type="checkbox"></td> <td style="">4</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Woocommerce" class="editable editable-click">Woocommerce</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="kyum@frok.com" class="editable editable-click">kyum@frok.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962066547" class="editable editable-click">+8801962066547</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">2,7</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.878462024097665 6.610814578664558 Z" fill="#006DF0"></path><path d="M 8 8 L 15.878462024097665 6.610814578664558 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="15%" class="editable editable-click">15%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="Oct 10, 2017" class="editable editable-click">Oct 10, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$3254" class="editable editable-click">$3254</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="4"> <td class="bs-checkbox "><input data-index="4" name="btSelectItem" type="checkbox"></td> <td style="">5</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Joomla" class="editable editable-click">Joomla</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="jams@game.com" class="editable editable-click">jams@game.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962098745" class="editable editable-click">+8801962098745</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">200,133</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 1 1 3.273327719952335 14.454344982802592 Z" fill="#006DF0"></path><path d="M 8 8 L 3.273327719952335 14.454344982802592 A 8 8 0 0 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="80%" class="editable editable-click">80%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="Nov 20, 2017" class="editable editable-click">Nov 20, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$58745" class="editable editable-click">$58745</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="5"> <td class="bs-checkbox "><input data-index="5" name="btSelectItem" type="checkbox"></td> <td style="">6</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Wordpress" class="editable editable-click">Wordpress</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="flat@yem.com" class="editable editable-click">flat@yem.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962254781" class="editable editable-click">+8801962254781</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">0.42,1.051</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.801589989996675 9.770647798966154 Z" fill="#006DF0"></path><path d="M 8 8 L 15.801589989996675 9.770647798966154 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="30%" class="editable editable-click">30%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="Aug 25, 2017" class="editable editable-click">Aug 25, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$789879" class="editable editable-click">$789879</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="6"> <td class="bs-checkbox "><input data-index="6" name="btSelectItem" type="checkbox"></td> <td style="">7</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Ecommerce" class="editable editable-click">Ecommerce</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="hasan@wpm.com" class="editable editable-click">hasan@wpm.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962254863" class="editable editable-click">+8801962254863</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">2,7</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.878462024097665 6.610814578664558 Z" fill="#006DF0"></path><path d="M 8 8 L 15.878462024097665 6.610814578664558 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="15%" class="editable editable-click">15%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="July 17, 2017" class="editable editable-click">July 17, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$21424" class="editable editable-click">$21424</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="7"> <td class="bs-checkbox "><input data-index="7" name="btSelectItem" type="checkbox"></td> <td style="">8</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Android Apps" class="editable editable-click">Android Apps</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="ATM@devep.com" class="editable editable-click">ATM@devep.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962875469" class="editable editable-click">+8801962875469</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">2,7</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.878462024097665 6.610814578664558 Z" fill="#006DF0"></path><path d="M 8 8 L 15.878462024097665 6.610814578664558 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="15%" class="editable editable-click">15%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="June 11, 2017" class="editable editable-click">June 11, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$78978" class="editable editable-click">$78978</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="8"> <td class="bs-checkbox "><input data-index="8" name="btSelectItem" type="checkbox"></td> <td style="">9</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Prestashop" class="editable editable-click">Prestashop</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="presta@Prest.com" class="editable editable-click">presta@Prest.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962067524" class="editable editable-click">+8801962067524</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">2,7</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.878462024097665 6.610814578664558 Z" fill="#006DF0"></path><path d="M 8 8 L 15.878462024097665 6.610814578664558 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="15%" class="editable editable-click">15%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="May 9, 2017" class="editable editable-click">May 9, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$45645" class="editable editable-click">$45645</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr><tr data-index="9"> <td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox"></td> <td style="">10</td> <td style=""><a href="javascript:void(0)" data-name="name" data-pk="undefined" data-value="Game Development" class="editable editable-click">Game Development</a></td> <td style=""><a href="javascript:void(0)" data-name="email" data-pk="undefined" data-value="Dev@game.com" class="editable editable-click">Dev@game.com</a></td> <td style=""><a href="javascript:void(0)" data-name="phone" data-pk="undefined" data-value="+8801962067457" class="editable editable-click">+8801962067457</a></td> <td class="datatable-ct" style=""><span class="pie" style="display: none;">2,7</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.878462024097665 6.610814578664558 Z" fill="#006DF0"></path><path d="M 8 8 L 15.878462024097665 6.610814578664558 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg>
                                            </td> <td style=""><a href="javascript:void(0)" data-name="task" data-pk="undefined" data-value="15%" class="editable editable-click">15%</a></td> <td style=""><a href="javascript:void(0)" data-name="date" data-pk="undefined" data-value="April 5, 2017" class="editable editable-click">April 5, 2017</a></td> <td style=""><a href="javascript:void(0)" data-name="price" data-pk="undefined" data-value="$4564545" class="editable editable-click">$4564545</a></td> <td class="datatable-ct" style=""><i class="fa fa-check"></i>
                                            </td> </tr></tbody>
                                </table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div><div class="fixed-table-pagination" style="display: block;"><div class="pull-left pagination-detail"><span class="pagination-info">Showing 1 to 10 of 21 rows</span><span class="page-list"><span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" class="active"><a href="#">10</a></li><li role="menuitem"><a href="#">25</a></li></ul></span> rows per page</span></div><div class="pull-right pagination"><ul class="pagination"><li class="page-pre"><a href="#">‹</a></li><li class="page-number active"><a href="#">1</a></li><li class="page-number"><a href="#">2</a></li><li class="page-number"><a href="#">3</a></li><li class="page-next"><a href="#">›</a></li></ul></div></div></div></div><div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- end content -->
@endsection