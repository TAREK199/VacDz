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
                            
                            <div class="add-product mg-b-15">
                                    <a href="enfants/create">Ajoute Enfant</a>
                                </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                
                              </div><div class="columns columns-right btn-group pull-right">
                                    <button class="btn btn-default" type="button" name="paginationSwitch" aria-label="pagination Switch" title="Hide/Show pagination">
                                        <i class="glyphicon glyphicon-collapse-down icon-chevron-down"></i>
                                    </button>
                                    <button class="btn btn-default" type="button" name="refresh" aria-label="refresh" title="Refresh">
                                        <i class="glyphicon glyphicon-refresh icon-refresh"></i>
                                    </button>
                                    <button class="btn btn-default" type="button" name="toggle" aria-label="toggle" title="Toggle"><i class="glyphicon glyphicon-list-alt icon-list-alt"></i>
                                    </button>
                                    <div class="keep-open btn-group" title="Columns"><button type="button" aria-label="columns" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem"><label><input type="checkbox" data-field="id" value="1" checked="checked"> ID</label></li><li role="menuitem"><label><input type="checkbox" data-field="name" value="2" checked="checked"> Task</label></li><li role="menuitem"><label><input type="checkbox" data-field="email" value="3" checked="checked"> Email</label></li><li role="menuitem"><label><input type="checkbox" data-field="phone" value="4" checked="checked"> Phone</label></li><li role="menuitem"><label><input type="checkbox" data-field="complete" value="5" checked="checked"> Completed</label></li><li role="menuitem"><label><input type="checkbox" data-field="task" value="6" checked="checked"> Task</label></li><li role="menuitem"><label><input type="checkbox" data-field="date" value="7" checked="checked"> Date</label></li><li role="menuitem"><label><input type="checkbox" data-field="price" value="8" checked="checked"> Price</label></li><li role="menuitem"><label><input type="checkbox" data-field="action" value="9" checked="checked"> Action</label></li></ul></div><div class="export btn-group"><button class="btn btn-default dropdown-toggle" aria-label="export type" title="Export data" data-toggle="dropdown" type="button" aria-expanded="false"><i class="glyphicon glyphicon-export icon-share"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" data-type="json"><a href="javascript:void(0)">JSON</a></li><li role="menuitem" data-type="xml"><a href="javascript:void(0)">XML</a></li><li role="menuitem" data-type="csv"><a href="javascript:void(0)">CSV</a></li><li role="menuitem" data-type="txt"><a href="javascript:void(0)">TXT</a></li><li role="menuitem" data-type="sql"><a href="javascript:void(0)">SQL</a></li><li role="menuitem" data-type="excel"><a href="javascript:void(0)">MS-Excel</a></li></ul></div></div><div class="pull-right search"><input class="form-control" type="text" placeholder="Search"></div></div><div class="fixed-table-container" style="padding-bottom: 0px;"><div class="fixed-table-header" style="display: none;">
                                        <table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 41px;">Loading, please wait...</div><div class="JCLRgrips" style="width: 1059px;"><div class="JCLRgrip" style="left: 37px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 75px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 272px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 446px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 605px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 712px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 770px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 903px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip" style="left: 1003px; height: 411px;"><div class="JColResizer"></div></div><div class="JCLRgrip JCLRLastGrip" style="left: 1076px; height: 411px;"></div></div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-hover JColResizer" style="margin-top: 0px;">
                                    <thead style="display: table-header-group;">
                                        <tr>
                                            <th class="bs-checkbox " style="width: 3.4%;" data-field="state" tabindex="0"><div class="th-inner "><input name="btSelectAll" type="checkbox"></div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 3.6%;" data-field="id" tabindex="0"><div class="th-inner ">ID</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 10.4%;" data-field="name" tabindex="0"><div class="th-inner ">Nom</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 10.1%;" data-field="email" tabindex="0"><div class="th-inner ">Prenom</div><div class="fht-cell"></div>
                                            </th><th style="width: 5.4%;" data-field="phone" tabindex="0"><div class="th-inner ">Sex</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 15%;" data-field="complete" tabindex="0"><div class="th-inner ">observation</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 5.4%;" data-field="task" tabindex="0"><div class="th-inner ">Pere</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 12.3%;" data-field="date" tabindex="0"><div class="th-inner ">Date de naissance</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 9.3%;" data-field="price" tabindex="0"><div class="th-inner ">lieu</div><div class="fht-cell"></div>
                                            </th>
                                            <th style="width: 6.7%;" data-field="action" tabindex="0"><div class="th-inner ">commune</div><div class="fht-cell"></div>
                                            <th style="width: 6.7%;" data-field="action" tabindex="0"><div class="th-inner ">action</div><div class="fht-cell"></div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($enfants as $enfant)
                                            
                                            <tr data-index="0"> 
                                                <td class="bs-checkbox ">
                                                    <input data-index="0" name="btSelectItem" type="checkbox">
                                                </td>
                                        <td style="">{{ $enfant->id }}</td> 
                                        <td style=""><a class="editable editable-click">{{ $enfant->nom }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->prenom }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->sex }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->observation }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->pere_id }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->date_naissance }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->lieu_naissance }}</a></td>
                                        <td style=""><a class="editable editable-click">{{ $enfant->commune_id }}</a></td>
                                        <td style=""><a href="enfants/{{ $enfant->id }}" class="text-primary  ">
                                            <button data-toggle="tooltip" title="" class="pd-setting-ed" onclick="window.location.href='profile_enfant.html'" data-original-title="Consulter Profile">
                                                    <i class="fa fa-sign-in big-icon" aria-hidden="true">
                                                        
                                                    </i>
                                                </button>
                                            </a>
                                            <a href="enfants/{{ $enfant->id }}/edit" class="text-primary  ">
                                                    <button data-toggle="tooltip" type="submit" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                            </a>
                                        
                                        
                                        </td> 
                                    </tr>
                                    @endforeach
                                    </tbody>
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