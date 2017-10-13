<?php
use hoaaah\LaravelBreadcrumb\Breadcrumb as Breadcrumb;
?>

@extends('layouts.app0')

@section('content')
  <div class="container row col-sm-12">
        <div class="row">
        <div class="col-md-12">
            <?php
                $this->title = 'Struktur SSH';
                $breadcrumb = new Breadcrumb();
                $breadcrumb->homeUrl = 'modul0';
                $breadcrumb->begin();
                $breadcrumb->add(['label' => 'SSH']);
                $breadcrumb->add(['label' => $this->title]);
                $breadcrumb->end();
            ?>          
        </div>
        </div>
        <div id="pesan"></div>
        <div class="row">
            <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <p><h2 class="panel-title">Standar Satuan Harga 
            <sup><a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Terdiri dari empat level. Level keempat dikaitkan ke rekening belanja; tiap item SSH bisa lebih dari satu rekening belanja."><i class="glyphicon glyphicon-question-sign"></i></a></sup></h2></p>
          </div>

          <div class="panel-body">
          
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#golongan" aria-controls="golongan" role="tab" data-toggle="tab">Golongan</a></li>
            <li><a href="#kelompok" aria-controls="kelompok" role="tab" data-toggle="tab">Kelompok</a></li>
            <li><a href="#subkelompok" aria-controls="subkelompok" role="tab" data-toggle="tab">Sub Kelompok</a></li>
            <li><a href="#tarif" aria-controls="tarif" role="tab" data-toggle="tab">Item SSH</a></li>
            <li><a href="#rekening" aria-controls="rekening" role="tab" data-toggle="tab">Rekening Belanja</a></li>
          </ul>

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="golongan">
              <br>
              <div class="add">
                <p><a id="btnPrintGol" class="print-golongan btn btn-sm btn-primary btn-labeled" href="{{ url('/printGolonganSsh')}}"><span class="btn-label"><i class="glyphicon glyphicon-print"></i></span>Cetak Golongan</a>
                <span><a id="btnAddGol" class="add-golongan btn btn-sm btn-success btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Tambah Golongan</a></span>
                </p>
              </div>
              <table id='tblGolongan' class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th width="5%" style="text-align: center; vertical-align:middle">No Urut</th>
                          <th style="text-align: center; vertical-align:middle">Uraian Golongan</th>
                          <th width="150px" style="text-align: center; vertical-align:middle">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
            </table>
            </div>

            <div role="tabpanel" class="tab-pane" id="kelompok">
              <br>
              <div class="add">
                <p ><a id="btnPrintKelSSh" class="print-kelompokssh btn btn-sm btn-primary btn-labeled" href="{{ url('/printKelompokSsh')}}"><span class="btn-label"><i class="glyphicon glyphicon-print"></i></span>Cetak Kelompok</a>
                <span><a id="btnAddKel" class="add-kelompok btn btn-sm btn-success btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Tambah Kelompok</a></span>
                </p>
              </div>
              <form class="form-horizontal" role="form" autocomplete='off' action="" method="" >
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody>
                    <tr>
                      <td width="15%" style="text-align: left; vertical-align:top;">Nama Golongan</td>
                      <td style="text-align: left; vertical-align:top;"><label id="nm_golongan_kel" align='left'></label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </form>
              <div id="divKelompok">
              <table id="tblKelompok" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th width="5%" style="text-align: center; vertical-align:middle">No Golongan</th>
                          <th width="5%" style="text-align: center; vertical-align:middle">No Urut</th>
                          <th style="text-align: center; vertical-align:middle">Uraian Kelompok</th>
                          <th width="150px" style="text-align: center; vertical-align:middle">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
            </table>
            </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="subkelompok">
            <br>
            <div class="add">
              <p><a id="btnPrintSubKelSSh" class="print-subkelssh btn btn-sm btn-primary btn-labeled" href="{{ url('/printSubKelompokSsh')}}"><span class="btn-label"><i class="glyphicon glyphicon-print"></i></span>Cetak Sub Kelompok</a>
              <span><a id="btnAddSubKel" class="add-subkelompok btn btn-sm btn-success btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Tambah Sub Kelompok</a></span>
              </p>
            </div>
            <form class="form-horizontal" role="form" autocomplete='off' action="" method="" >
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody>
                    <tr>
                      <td width="15%" style="text-align: left; vertical-align:top;">Nama Golongan</td>
                      <td style="text-align: left; vertical-align:top;"><label id="nm_golongan_skel" align='left'></label></td>
                    </tr>
                    <tr>
                      <td width="15%" style="text-align: left; vertical-align:top;">Nama Kelompok</td>
                      <td style="text-align: left; vertical-align:top;"><label id="nm_kelompok_skel" align='left'></label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </form>
              <div id="divSubKelompok">
              <table id="tblSubKelompok" class="table display table-striped table-bordered"  cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th width="5%" style="text-align: center; vertical-align:middle">No Kelompok</th>
                          {{-- <th width="5%" style="text-align: center; vertical-align:middle">Id Sub Kelompok</th> --}}
                          <th width="5%" style="text-align: center; vertical-align:middle">No Urut</th>
                          <th style="text-align: center; vertical-align:middle">Uraian Sub Kelompok</th>
                          <th width="180px" style="text-align: center; vertical-align:middle">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="tarif">
            <br>
            <div class="add">
              <p ><a id="btnPrintItemSSh" class="btnPrintItemSSh btn btn-sm btn-primary btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Cetak Item SSH</a>
              <span><a id="btnAddItem" class="add-item btn btn-sm btn-success btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>Tambah Item</a></span>
              </p>
            </div>
            <form class="form-horizontal" role="form" autocomplete='off' action="" method="" >
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody>
                    <tr>
                      <td width="15%" style="text-align: left; vertical-align:top;">Nama Golongan</td>
                      <td style="text-align: left; vertical-align:top;"><label id="nm_golongan_tarif" align='left'></label></td>
                    </tr>
                    <tr>
                      <td width="15%" style="text-align: left; vertical-align:top;">Nama Kelompok</td>
                      <td style="text-align: left; vertical-align:top;"><label id="nm_kelompok_tarif" align='left'></label></td>
                    </tr>
                    <tr>
                      <td width="15%" style="text-align: left; vertical-align:top;">Nama Sub Kelompok</td>
                      <td style="text-align: left; vertical-align:top;"><label id="nm_subkelompok_tarif" align='left'></label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </form>
              <div id="divTarif">
                <table id="tblTarif" class="table display table-striped table-bordered"  cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th width="10%" style="text-align: center; vertical-align:middle">No Sub Kelompok</th>
                              {{-- <th width="10%" style="text-align: center; vertical-align:middle">Id Item SSH</th> --}}
                              <th width="10%" style="text-align: center; vertical-align:middle">No Urut</th>
                              <th style="text-align: center; vertical-align:middle">Uraian Item SSH</th>
                              <th width="180px" style="text-align: center; vertical-align:middle">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                </table>
              </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="rekening">
                <br>
                <div class="add">
                  <p id="btnAddRek"><a class="add-rekening btn btn-sm btn-success btn-labeled"><span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span></i> Tambah Rekening</a></p>
                </div>
                <form class="form-horizontal" role="form" autocomplete='off' action="" method="" >
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <tbody>
                      <tr>
                        <td width="15%" style="text-align: left; vertical-align:top;">Nama Golongan</td>
                        <td style="text-align: left; vertical-align:top;"><label id="nm_golongan_rek" align='left'></label></td>
                      </tr>
                      <tr>
                        <td width="15%" style="text-align: left; vertical-align:top;">Nama Kelompok</td>
                        <td style="text-align: left; vertical-align:top;"><label id="nm_kelompok_rek" align='left'></label></td>
                      </tr>
                      <tr>
                        <td width="15%" style="text-align: left; vertical-align:top;">Nama Sub Kelompok</td>
                        <td style="text-align: left; vertical-align:top;"><label id="nm_subkelompok_rek" align='left'></label></td>
                      </tr>
                      <tr>
                        <td width="15%" style="text-align: left; vertical-align:top;">Nama Item SSH</td>
                        <td style="text-align: left; vertical-align:top;"><label id="nm_itemssh_rek" align='left'></label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </form>
                <div id="divRekening">
                <table id="tblRekening" class="table display table-striped table-bordered"  cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th width="10%" style="text-align: center; vertical-align:middle">Id Item SSH</th>
                              <th width="10%" style="text-align: center; vertical-align:middle">Kode Rekening</th>
                              <th style="text-align: center; vertical-align:middle">Uraian Rekening</th>
                              <th width="180px" style="text-align: center; vertical-align:middle">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<!--Modal Golongan -->
<div id="TambahGolongan" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg"  >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
        <h4 class="modal-title"></h4>
      </div>
    <!-- <form class="form-horizontal" role="form"> -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" autocomplete='off' action="{{ route('TambahGolongan') }}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="no_urut_gol" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                  <input type="text" class="form-control" id="no_urut_gol" name="no_urut_gol" required="required" >
                  <span class="input-group-addon">
                      <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                    </span>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ur_golongan" class="col-sm-3 control-label" align='left'>Uraian Golongan SSH :</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" rows="5" id="ur_golongan" name="ur_golongan" required="required" ></textarea>
              </div>
            </div>
        </form>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnAddGol btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooAddGol" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<div id="EditGolongan" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" autocomplete='off' action="" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_gol_edit">Id Golongan :</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="id_gol_edit" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="no_urut_gol_edit" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_gol_edit" name="no_urut_gol_edit" required="required" >
                <span class="input-group-addon">
                      <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                    </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="ur_gol_edit">Uraian Golongan SSH:</label>
              <div class="col-sm-8">
                <textarea type="name" class="form-control" id="ur_gol_edit" rows="5"></textarea>
              </div>
            </div>
          </form>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnEditGol btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooEditGol" class="glyphicon glyphicon-save"></i></span>Update</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>

<!--Modal Hapus -->
<div id="HapusGolongan" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger deleteContent">
              Yakin akan menghapus <strong><span class="title"></span></strong> ?
          <span class="hidden id_gol_hapus"></span>
        </div>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-danger btnDelGol btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooDelGol" class="glyphicon glyphicon-save"></i></span>Hapus</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<!--Modal Kelompok -->
<div id="TambahKelompok" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg"  >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
        <h4 class="modal-title"></h4>
      </div>
    <!-- <form class="form-horizontal" role="form"> -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" autocomplete='off' action="{{ route('TambahKelompok') }}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
  					  <label for="id_gol_kel" class="col-sm-3 control-label" align='left'>Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_kel" align='left'></label>
                <input type="hidden" id="id_gol_kel" name="id_gol_kel" align='left'>
              </div>
  					</div>
            <div class="form-group">
              <label for="no_urut_kel" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_kel" name="no_urut_kel" required="required" >
                <span class="input-group-addon">
                    <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ur_kel_ssh" class="col-sm-3 control-label" align='left'>Uraian Kelompok SSH :</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" rows="5" id="ur_kel_ssh" name="ur_kel_ssh" required="required" ></textarea>
              </div>
            </div>
        </form>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnAKel btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooAddKel" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<div id="EditKelompok" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" autocomplete='off' action="" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_gol_kel_edit">Golongan SSH:</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_kel_edit" align='left'></label>
                <input type="hidden" id="id_gol_kel_edit" name="id_gol_kel_edit" align='left'>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_kel_edit">Kelompok SSH:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="id_kel_edit" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="no_urut_kel_edit" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_kel_edit" name="no_urut_kel_edit" required="required" >
                <span class="input-group-addon">
                  <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="ur_kel_edit">Uraian Kelompok SSH:</label>
              <div class="col-sm-8">
                <textarea type="name" class="form-control" id="ur_kel_edit" rows="5"></textarea>
              </div>
            </div>
          </form>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnEkel btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooEditKel" class="glyphicon glyphicon-save"></i></span>Update</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>

<!--Modal Hapus -->
<div id="HapusKelompok" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger deleteContent">
              Yakin akan menghapus <strong><span class="uraian"></span></strong> ?
          <span class="hidden id_kel_hapus"></span>
        </div>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnHapusKel btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooHapusKel" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<!--Modal Sub Kelompok -->
<div id="TambahSubKelompok" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg"  >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
        <h4 class="modal-title"></h4>
      </div>
    <!-- <form class="form-horizontal" role="form"> -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" autocomplete='off' action="{{ route('TambahSubKelompok') }}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
  					  <label for="id_gol_subkel" class="col-sm-3 control-label" align='left'>Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_subkel" align='left'></label>
                <input type="hidden" id="id_gol_subkel" name="id_gol_subkel" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_kel_sub" class="col-sm-3 control-label" align='left'>Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idkel_sub" align='left'></label>
                <input type="hidden" id="id_kel_sub" name="id_kel_sub" align='left'>
              </div>
  					</div>
            <div class="form-group">
              <label for="no_urut_sub" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_sub" name="no_urut_sub" required="required" >
                <span class="input-group-addon">
                    <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ur_subkel_ssh" class="col-sm-3 control-label" align='left'>Uraian Sub Kelompok SSH :</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" rows="5" id="ur_subkel_ssh" name="ur_subkel_ssh" required="required" ></textarea>
              </div>
            </div>
        </form>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja" data-backdrop="static">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnAddSKel btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooAddSKel" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<div id="EditSubKelompok" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" autocomplete='off' action="" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_gol_sub_edit">Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_sub_edit" align='left'></label>
                <input type="hidden" id="id_gol_sub_edit" name="id_gol_sub_edit" align='left'>
              </div>
            </div>
            <div class="form-group">
  					  <label for="id_kel_sub_edit" class="col-sm-3 control-label" align='left'>Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idkel_sub_edit" align='left'></label>
                <input type="hidden" id="id_kel_sub_edit" name="id_kel_sub_edit" align='left'>
              </div>
  					</div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_subkel_edit">Id Sub Kelompok :</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="id_subkel_edit" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="no_urut_sub_edit" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_sub_edit" name="no_urut_sub_edit" required="required" >
                <span class="input-group-addon">
                  <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="ur_subkel_edit">Uraian Sub Kelompok SSH:</label>
              <div class="col-sm-8">
                <textarea type="name" class="form-control" id="ur_subkel_edit" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
          </div>
          </form>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnEditSKel btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooEditSKel" class="glyphicon glyphicon-save"></i></span>Update</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>

<!--Modal Hapus -->
<div id="HapusSubKelompok" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger deleteContent">
              Yakin akan menghapus <strong><span class="uraian"></span></strong> ?
          <span class="hidden id_subkel_hapus"></span>
        </div>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-danger btnHapusSKel btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooHapusSKel" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<!--Modal Tarif Item -->
<div id="TambahItem" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg"  >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
        <h4 class="modal-title"></h4>
      </div>
    <!-- <form class="form-horizontal" role="form"> -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" autocomplete='off' action="{{ route('TambahItem') }}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
  					  <label for="id_gol_item" class="col-sm-3 control-label" align='left'>Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_item" align='left'></label>
                <input type="hidden" id="id_gol_item" name="id_gol_item" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_kel_item" class="col-sm-3 control-label" align='left'>Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idkel_item" align='left'></label>
                <input type="hidden" id="id_kel_item" name="id_kel_item" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_sub_item" class="col-sm-3 control-label" align='left'>Sub Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idsub_item" align='left'></label>
                <input type="hidden" id="id_sub_item" name="id_sub_item" align='left'>
              </div>
  					</div>
            <div class="form-group">
              <label for="no_urut_item" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_item" name="no_urut_item" required="required" >
                <span class="input-group-addon">
                  <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ur_item_ssh" class="col-sm-3 control-label" align='left'>Uraian Item SSH :</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" rows="5" id="ur_item_ssh" name="ur_item_ssh" required="required" ></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_satuan_ssh">Satuan :</label>
              <div class="col-sm-8">
                <select class="form-control" name="id_satuan_ssh" id="id_satuan_ssh">
                  @foreach($refsatuan as $val)
                    <option value={{ $val->id_satuan }}>{{ $val->uraian_satuan }}</option>
                  @endforeach
                </select>
              </div>
            </div>
        </form>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnAItem btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooAItem" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<div id="EditItem" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" autocomplete='off' action="" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_gol_item_edit">Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_item_edit" align='left'></label>
                <input type="hidden" id="id_gol_item_edit" name="id_gol_item_edit" align='left'>
              </div>
            </div>
            <div class="form-group">
  					  <label for="id_kel_item_edit" class="col-sm-3 control-label" align='left'>Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idkel_item_edit" align='left'></label>
                <input type="hidden" id="id_kel_item_edit" name="id_kel_item_edit" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_sub_item_edit" class="col-sm-3 control-label" align='left'>Sub Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idsub_item_edit" align='left'></label>
                <input type="hidden" id="id_sub_item_edit" name="id_sub_item_edit" align='left'>
              </div>
  					</div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_item_edit">Id Item SSH :</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="id_item_edit" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="no_urut_item_edit" class="col-sm-3 control-label" align='left'>No Urut :</label>
              <div class="col-sm-3">
                <div class="input-group">
                <input type="text" class="form-control" id="no_urut_item_edit" name="no_urut_item_edit" required="required" >
                <span class="input-group-addon">
                  <a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Diisi sesuai urutan nomor di pencetakan daftar SSH"><i class="glyphicon glyphicon-question-sign"></i></a>
                </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="ur_item_edit">Uraian Item SSH:</label>
              <div class="col-sm-8">
                <textarea type="name" class="form-control" id="ur_item_edit" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_satuan_edit">Satuan :</label>
              <div class="col-sm-8">
                <select class="form-control" name="id_satuan_edit" id="id_satuan_edit" value="{{ old('id_satuan_edit') }}">
                  @foreach($refsatuan as $val)
                    <option value={{ $val->id_satuan }}>{{ $val->uraian_satuan }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </form>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnEditItem btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooEditItem" class="glyphicon glyphicon-save"></i></span>Update</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>

<!--Modal Hapus -->
<div id="HapusItem" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger deleteContent">
              Yakin akan menghapus <strong><span class="uraian"></span></strong> ?
          <span class="hidden id_item_hapus"></span>
        </div>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-danger btnHapusItem btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooHapusItem" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<!--Modal Rekening Item -->
<div id="TambahRekening" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-lg"  >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
        <h4 class="modal-title"></h4>
      </div>
    <!-- <form class="form-horizontal" role="form"> -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" autocomplete='off' action="{{ route('TambahRekening') }}" method="post" onsubmit="return false;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
  					  <label for="id_gol_rek" class="col-sm-3 control-label" align='left'>Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_rek" align='left'></label>
                <input type="hidden" id="id_gol_rek" name="id_gol_rek" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_kel_rek" class="col-sm-3 control-label" align='left'>Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idkel_rek" align='left'></label>
                <input type="hidden" id="id_kel_rek" name="id_kel_rek" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_sub_rek" class="col-sm-3 control-label" align='left'>Sub Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idsub_rek" align='left'></label>
                <input type="hidden" id="id_sub_rek" name="id_sub_rek" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_item_rek" class="col-sm-3 control-label" align='left'>Item SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="iditem_rek" align='left'></label>
                <input type="hidden" id="id_item_rek" name="id_item_rek" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_rek" class="col-sm-3 control-label" align='left'>Rekening belanja Item SSH :</label>
              <p>
              <div class="col-sm-8">
                  <div class="input-group">
                    <input type="hidden" class="form-control" id="id_rek" name="id_rek" required="required" >
                    <input type="text" class="form-control" id="nm_rekening" name="nm_rekening" disabled>
                    <div class="input-group-btn">
                      <button class="btn btn-primary" data-toggle="modal" href="#cariRekening"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
              </div>
                <sup><a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Dikaitkan ke parameter rekening; dapat dikaitkan ke lebih dari satu rekening"><i class="glyphicon glyphicon-question-sign"></i></a></sup>
              </p>
  					</div>
        </form>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnARek btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooARek" class="glyphicon glyphicon-save"></i></span>Simpan</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

<div id="EditRekening" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" autocomplete='off' action="" method="post" onsubmit="return false;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="control-label col-sm-3" for="id_gol_rek_edit">Golongan SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idgol_rek_edit" align='left'></label>
                <input type="hidden" id="id_gol_rek_edit" name="id_gol_rek_edit" align='left'>
              </div>
            </div>
            <div class="form-group">
  					  <label for="id_kel_rek_edit" class="col-sm-3 control-label" align='left'>Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idkel_rek_edit" align='left'></label>
                <input type="hidden" id="id_kel_rek_edit" name="id_kel_rek_edit" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_sub_rek_edit" class="col-sm-3 control-label" align='left'>Sub Kelompok SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="idsub_rek_edit" align='left'></label>
                <input type="hidden" id="id_sub_rek_edit" name="id_sub_rek_edit" align='left'>
              </div>
  					</div>
            <div class="form-group">
  					  <label for="id_item_rek_edit" class="col-sm-3 control-label" align='left'>Item SSH :</label>
              <div class="col-sm-8">
    					 	<label class="control-label" id="iditem_rek_edit" align='left'></label>
                <input type="hidden" id="id_item_rek_edit" name="id_item_rek_edit" align='left'>
              </div>
  					</div>
            <div class="form-group">
              <label for="id_rek_edit" class="col-sm-3 control-label" align='left'>Id Rekening SSH :</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="id_rek_edit" name="id_rek_edit" disabled >
              </div>
            </div>
            <div class="form-group">
  					  <label for="id_rekening_edit" class="col-sm-3 control-label" align='left'>Rekening belanja Item SSH :</label>
              <p>
              <div class="col-sm-8">
    					 	 <div class="input-group">
                    <input type="hidden" class="form-control" id="id_rekening_edit" name="id_rekening_edit" required="required" >
                    <input type="text" class="form-control" id="nm_rekening_edit" name="nm_rekening_edit" disabled>
                    <div class="input-group-btn">
                      <button class="btn btn-primary" data-toggle="modal" href="#cariRekening"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
              </div>
              <sup><a href="#" data-toggle="popover" data-container="body" title="Struktur SSH" data-trigger="hover" data-content="Dikaitkan ke parameter rekening; dapat dikaitkan ke lebih dari satu rekening"><i class="glyphicon glyphicon-question-sign"></i></a></sup>
              </p>
  					</div>
          </form>
          <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-success btnEditRek btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooEditRek" class="glyphicon glyphicon-save"></i></span>Update</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
</div>

<!--Modal Hapus -->
<div id="HapusRekening" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger deleteContent">
              Yakin akan menghapus <strong><span class="uraian"></span></strong> ?
          <span class="hidden id_rek_hapus"></span>
        </div>
        <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-2 text-left idbtnHapusBelanja">
                    </div>
                    <div class="col-sm-10 text-right">
                      <div class="ui-group-buttons">
                        <button type="button" class="btn btn-sm btn-danger btnHapusRek btn-labeled" data-dismiss="modal">
                            <span class="btn-label"><i id="fooHapusRek" class="glyphicon glyphicon-save"></i></span>Hapus</button>
                        <div class="or"></div>
                        <button type="button" class="btn btn-sm btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                            <span class="btn-label"><i class="glyphicon glyphicon-log-out"></i></span>Tutup</button>
                      </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
</div>

  {{-- Modal Cari Kode Rekening --}}
  <div id="cariRekening" class="modal fade" tabindex="-1" data-focus-on="input:first" data-backdrop="static">
  <div class="modal-dialog modal-lg"  >
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Daftar Rekening</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" role="form" autocomplete='off' action="" method="">
        <div class="form-group">
          <div class="col-sm-12">
            <table id='tblCariRekening' class="table display table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="5%" style="text-align: center; vertical-align:middle">No Urut</th>
                  <th width="15%" style="text-align: center; vertical-align:middle">Kode Rekening</th>
                  <th style="text-align: center; vertical-align:middle">Uraian Rekening</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </form>
      </div>
    </div>
    </div>
  </div>


@endsection



@section('scripts')
<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {

  $('[data-toggle="popover"]').popover();

  var id_gol_ssh;
  var nm_gol_ssh;
  var id_kel_ssh;
  var nm_kel_ssh;
  var id_skel_ssh;
  var nm_skel_ssh;
  var id_item_ssh;
  var nm_item_ssh;

  if (id_gol_ssh == null && id_gol_ssh === undefined ){
    document.getElementById("btnAddKel").style.visibility='hidden';
    document.getElementById("btnAddSubKel").style.visibility='hidden';
    document.getElementById("btnAddItem").style.visibility='hidden';
    document.getElementById("btnAddRek").style.visibility='hidden';
  };

    var golongan = $('#tblGolongan').DataTable( {
          processing: true,
          serverSide: true,
          "ajax": "{{url('/ssh/getGolongan')}}",
          dom: 'BFrtip',
          "columns": [
                { data: 'no_urut'},
                { data: 'uraian_golongan_ssh'},
                { data: 'action', 'searchable': false, 'orderable':false }
              ]
        } );

    $('#tblGolongan tbody').on('dblclick', 'tr', function () {
      
      var data = golongan.row( this ).data();

      id_gol_ssh = data.id_golongan_ssh;
      nm_gol_ssh = data.uraian_golongan_ssh;

      if (id_gol_ssh != null && id_gol_ssh !== undefined ){
        document.getElementById("btnAddKel").style.visibility='visible';
      } else {
        document.getElementById("btnAddKel").style.visibility='hidden';
      };

      document.getElementById("nm_golongan_kel").innerHTML = nm_gol_ssh;

      $('.nav-tabs a[href="#kelompok"]').tab('show');
      $('#tblKelompok').DataTable().ajax.url("./ssh/getKelompok/"+id_gol_ssh).load();
      $('#tblSubKelompok').DataTable().ajax.url("./ssh/getSubKelompok/0").load();
            

    } );

    var kelompok = $('#tblKelompok').DataTable( {
          processing: true,
          serverSide: true,
          "ajax": {"url": "./ssh/getKelompok/0"},
          dom: 'BFrtip',
          "columns": [
                { data: 'no_urut_gol'},
                { data: 'no_urut'},
                { data: 'uraian_kelompok_ssh'},
                { data: 'action', 'searchable': false, 'orderable':false }
              ],
          "order": [[ 1, "asc" ]]
          } );

    $('#tblKelompok tbody').on('dblclick', 'tr', function () {
      
      var data = kelompok.row( this ).data();

      id_gol_ssh = data.id_golongan_ssh;
      nm_gol_ssh = data.uraian_golongan_ssh;
      id_kel_ssh = data.id_kelompok_ssh;
      nm_kel_ssh = data.uraian_kelompok_ssh;

      if (id_kel_ssh != null && id_kel_ssh !== undefined ){
        document.getElementById("btnAddSubKel").style.visibility='visible';
      } else {
        document.getElementById("btnAddSubKel").style.visibility='hidden';
      };

      document.getElementById("nm_golongan_skel").innerHTML = nm_gol_ssh;
      document.getElementById("nm_kelompok_skel").innerHTML = nm_kel_ssh;

      
      $('.nav-tabs a[href="#subkelompok"]').tab('show');
      $('#tblSubKelompok').DataTable().ajax.url("./ssh/getSubKelompok/"+id_kel_ssh).load();
      $('#tblTarif').DataTable().ajax.url("./ssh/getTarif/0").load();
            

    } );

    var subkelompok = $('#tblSubKelompok').DataTable( {
          processing: true,
          serverSide: true,
          "ajax": {"url": "./ssh/getSubKelompok/0"},
          dom: 'Bfrtip',
          "columns": [
                { data: 'no_urut_kel'},
                { data: 'no_urut'},
                { data: 'uraian_sub_kelompok_ssh'},
                { data: 'action', 'searchable': false, 'orderable':false }
              ],
          "order": [[ 1, "asc" ]]
          } );

    $('#tblSubKelompok tbody').on('dblclick', 'tr', function () {
      
      var data = subkelompok.row( this ).data();

      id_gol_ssh = data.id_golongan_ssh;
      nm_gol_ssh = data.uraian_golongan_ssh;
      id_kel_ssh = data.id_kelompok_ssh;
      nm_kel_ssh = data.uraian_kelompok_ssh;
      id_skel_ssh = data.id_sub_kelompok_ssh;
      nm_skel_ssh = data.uraian_sub_kelompok_ssh;

      if (id_skel_ssh != null && id_skel_ssh !== undefined ){
        document.getElementById("btnAddItem").style.visibility='visible';
      } else {
        document.getElementById("btnAddItem").style.visibility='hidden';
      };

      document.getElementById("nm_golongan_tarif").innerHTML = nm_gol_ssh;
      document.getElementById("nm_kelompok_tarif").innerHTML = nm_kel_ssh;
      document.getElementById("nm_subkelompok_tarif").innerHTML = nm_skel_ssh;      
      
      $('.nav-tabs a[href="#tarif"]').tab('show');
      $('#tblTarif').DataTable().ajax.url("./ssh/getTarif/"+id_skel_ssh).load();
      $('#tblRekening').DataTable().ajax.url("./ssh/getRekening/0").load();

      $(document).on('click', '.btnPrintItemSSh', function() {

        location.replace('./printItemSsh/'+id_skel_ssh);
        
      });            

    } );

    var tarif = $('#tblTarif').DataTable( {
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                "ajax": {"url": "./ssh/getTarif/0"},
                "columns": [
                      { data: 'no_urut_skel'},
                      { data: 'no_urut'},
                      { data: 'uraian_tarif_ssh'},
                      { data: 'action', 'searchable': false, 'orderable':false }
                    ],
                "order": [[ 1, "asc" ]]
          } );

    $('#tblTarif tbody').on('dblclick', 'tr', function () {
      
      var data = tarif.row( this ).data();

      id_gol_ssh = data.id_golongan_ssh;
      nm_gol_ssh = data.uraian_golongan_ssh;
      id_kel_ssh = data.id_kelompok_ssh;
      nm_kel_ssh = data.uraian_kelompok_ssh;
      id_skel_ssh = data.id_sub_kelompok_ssh;
      nm_skel_ssh = data.uraian_sub_kelompok_ssh;
      id_item_ssh = data.id_tarif_ssh;
      nm_item_ssh = data.uraian_tarif_ssh;

      if (id_item_ssh != null && id_item_ssh !== undefined ){
        document.getElementById("btnAddRek").style.visibility='visible';
      } else {
        document.getElementById("btnAddRek").style.visibility='hidden';
      };

      document.getElementById("nm_golongan_rek").innerHTML = nm_gol_ssh;
      document.getElementById("nm_kelompok_rek").innerHTML = nm_kel_ssh;
      document.getElementById("nm_subkelompok_rek").innerHTML = nm_skel_ssh;
      document.getElementById("nm_itemssh_rek").innerHTML = nm_item_ssh;       
      
      $('.nav-tabs a[href="#rekening"]').tab('show');
      $('#tblRekening').DataTable().ajax.url("./ssh/getRekening/"+id_item_ssh).load();           

    } );

    var rekening = $('#tblRekening').DataTable( {
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                "ajax": {"url": "./ssh/getRekening/0"},
                "columns": [
                      // { data: 'id_rekening_ssh'},
                      { data: 'no_urut_tarif'},
                      { data: 'kd_rekening'},
                      { data: 'ur_rekening'},
                      { data: 'action', 'searchable': false, 'orderable':false }
                    ],
                "order": [[ 1, "asc" ]]
          } );

  var rekening = $('#tblCariRekening').DataTable( {
        // retrieve: true,
        processing: true,
        serverSide: true,
        dom: 'BfrtIp',
        "ajax": {"url": "./ssh/getCariRekening"},
        "columns": [
              { data: 'no_urut'},
              { data: 'kd_rekening'},
              { data: 'nm_rekening'}
            ]
  });

    $('#tblCariRekening tbody').on( 'dblclick', 'tr', function () {

    var data = rekening.row(this).data();

    document.getElementById("nm_rekening").value = data.kd_rekening + '--' + data.nm_rekening;
    document.getElementById("id_rek").value = data.id_rekening;

    document.getElementById("nm_rekening_edit").value = data.kd_rekening + '--' + data.nm_rekening;
    document.getElementById("id_rekening_edit").value = data.id_rekening;

    // alert('Anda telah memilih kode ini : '+data.kd_rekening + '-' + data.nm_rekening);

    $('#cariRekening').modal('hide');    

  } );

          //tambah golongan
          $(document).on('click', '.add-golongan', function() {
            $('#fooAddGol').addClass('glyphicon-plus');
            $('#fooAddGol').removeClass('glyphicon-trash');
            $('.btnAddGol').addClass('btn-success');
            $('.btnAddGol').removeClass('btn-danger');
            $('.btnAddGol').addClass('addGolongan');
            $('.modal-title').text('Tambah Data Golongan SSH');
            $('.form-horizontal').show();
            $('#TambahGolongan').modal('show');
          });

          $('.modal-footer').on('click', '.addGolongan', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/addGolongan',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'no_urut_gol': $('#no_urut_gol').val(),
                      'ur_golongan': $('#ur_golongan').val(),
                  },
                  success: function(data) {
                      if ((data.errors)){
                        $('.error').removeClass('hidden');
                      }
                      else {
                          $('.error').addClass('hidden');
                          $('#tblGolongan').DataTable().ajax.url("./ssh/getGolongan").load();
                          $('#tblGolongan').DataTable().ajax.reload(null,true);
                      }
                  },
              });
          });

          //edit golongan
          $(document).on('click', '.edit-golongan', function() {
            $('#fooEditGol').addClass('glyphicon-check');
            $('#fooEditGol').removeClass('glyphicon-trash');
            $('.btnEditGol').addClass('btn-success');
            $('.btnEditGol').removeClass('btn-danger');
            $('.btnEditGol').addClass('editGolongan');
            $('.modal-title').text('Edit Data Golongan SSH');
            $('.form-horizontal').show();
            $('#id_gol_edit').val($(this).data('id_gol_edit'));
            $('#no_urut_gol_edit').val($(this).data('no_urut_gol_edit'));
            $('#ur_gol_edit').val($(this).data('ur_gol_edit'));
            $('#EditGolongan').modal('show');
          });

          $('.modal-footer').on('click', '.editGolongan', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/editGolongan',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'id_gol_edit': $("#id_gol_edit").val(),
                      'no_urut_gol_edit': $('#no_urut_gol_edit').val(),
                      'ur_gol_edit': $('#ur_gol_edit').val(),
                  },
                  success: function(data) {
                      $('#tblGolongan').DataTable().ajax.reload();
                  }
              });
          });

          //hapus golongan
          $(document).on('click', '.delete-golongan', function() {
            $('#fooDelGol').removeClass('glyphicon-check');
            $('#fooDelGol').addClass('glyphicon-trash');
            $('.btnDelGol').removeClass('btn-success');
            $('.btnDelGol').addClass('btn-danger');
            $('.btnDelGol').addClass('delGolongan');
            $('.modal-title').text('Hapus Data Golongan SSH');
            $('.id_gol_hapus').text($(this).data('id_gol_hapus'));
            $('.form-horizontal').hide();
            $('.title').html($(this).data('ur_gol_hapus'));
            $('#HapusGolongan').modal('show');
          });

          $('.modal-footer').on('click', '.delGolongan', function() {
            $.ajaxSetup({
               headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });

            $.ajax({
              type: 'post',
              url: './ssh/hapusGolongan',
              data: {
                '_token': $('input[name=_token]').val(),
                'id_gol_hapus': $('.id_gol_hapus').text()
              },
              success: function(data) {
                $('.item' + $('.id_gol_hapus').text()).remove();
                $('#tblGolongan').DataTable().ajax.reload();
              }
            });
          });

          //tambah Kelompok
          $(document).on('click', '.add-kelompok', function() {
            $('#fooAddKel').addClass('glyphicon-plus');
            $('#fooAddKel').removeClass('glyphicon-trash');
            $('.btnAKel').addClass('btn-success');
            $('.btnAKel').removeClass('btn-danger');
            $('.btnAKel').addClass('addKelompok');
            $('.modal-title').text('Tambah Data Kelompok SSH');
            $('.form-horizontal').show();
            $('#id_gol_kel').val(id_gol_ssh);
            document.getElementById("idgol_kel").innerHTML = nm_gol_ssh;
            $('#TambahKelompok').modal('show');
          });

          $('.modal-footer').on('click', '.addKelompok', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/addKelompok',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'id_gol_kel': $('#id_gol_kel').val(),
                      'no_urut_kel': $('#no_urut_kel').val(),
                      'ur_kel_ssh': $('#ur_kel_ssh').val(),
                  },
                  success: function(data) {
                      if ((data.errors)){
                        $('.error').removeClass('hidden');
                          $('.error').text(data.errors.name1);
                      }
                      else {
                          $('.error').addClass('hidden');
                          $('#tblKelompok').DataTable().ajax.reload();
                          // $("#kelompok").load(location.href+" #kelompok>*","");
                          $('#kelompok').html();
                      }
                  },
              });
          });

          //Edit Kelompok
          $(document).on('click', '.edit-kelompok', function() {
            $('#fooEditKel').addClass('glyphicon-check');
            $('#fooEditKel').removeClass('glyphicon-trash');
            $('.btnEditKel').addClass('btn-success');
            $('.btnEditKel').removeClass('btn-danger');
            $('.btnEditKel').addClass('editKelompok');
            $('.modal-title').text('Edit Data Kelompok SSH');
            $('.form-horizontal').show();
            $('#id_gol_kel_edit').val($(this).data('id_gol_kel'));
            document.getElementById("idgol_kel_edit").innerHTML = nm_gol_ssh;
            $('#id_kel_edit').val($(this).data('id_kel'));
            $('#no_urut_kel_edit').val($(this).data('no_urut_kel'));
            $('#ur_kel_edit').val($(this).data('ur_kel'));
            $('#EditKelompok').modal('show');
          });

          $('.modal-footer').on('click', '.editKelompok', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/editKelompok',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'id_gol_kel_edit': $("#id_gol_kel_edit").val(),
                      'id_kel_edit': $("#id_kel_edit").val(),
                      'no_urut_kel_edit': $('#no_urut_kel_edit').val(),
                      'ur_kel_edit': $('#ur_kel_edit').val(),
                  },
                  success: function(data) {
                      $('#tblKelompok').DataTable().ajax.reload();
                  }
              });
          });

          //Hapus Kelompok
          $(document).on('click', '.delete-kelompok', function() {
            $('#fooHapusKel').removeClass('glyphicon-check');
            $('#fooHapusKel').addClass('glyphicon-trash');
            $('.btnHapusKel').removeClass('btn-success');
            $('.btnHapusKel').addClass('btn-danger');
            $('.btnHapusKel').addClass('delKelompok');
            $('.modal-title').text('Hapus Data Kelompok SSH');
            $('.id_kel_hapus').text($(this).data('id_kel_hapus'));
            $('.form-horizontal').hide();
            $('.uraian').html($(this).data('ur_kel_hapus'));
            $('#HapusKelompok').modal('show');
          });

          $('.modal-footer').on('click', '.delKelompok', function() {
            $.ajaxSetup({
               headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });

            $.ajax({
              type: 'post',
              url: './ssh/hapusKelompok',
              data: {
                '_token': $('input[name=_token]').val(),
                'id_kel_hapus': $('.id_kel_hapus').text()
              },
              success: function(data) {
                $('.item' + $('.id_kel_hapus').text()).remove();
                $('#tblKelompok').DataTable().ajax.reload();
              }
            });
          });

          //tambah SubKelompok
          $(document).on('click', '.add-subkelompok', function() {
            $('#fooAddSKel').addClass('glyphicon-plus');
            $('#fooAddSKel').removeClass('glyphicon-trash');
            $('.btnAddSKel').addClass('btn-success');
            $('.btnAddSKel').removeClass('btn-danger');
            $('.btnAddSKel').addClass('addSubKelompok');
            $('.modal-title').text('Tambah Data Sub Kelompok SSH');
            $('.form-horizontal').show();
            $('#id_gol_subkel').val(id_gol_ssh);            
            $('#id_kel_sub').val(id_kel_ssh);
            document.getElementById("idgol_subkel").innerHTML = nm_gol_ssh;
            document.getElementById("idkel_sub").innerHTML = nm_kel_ssh;
            $('#TambahSubKelompok').modal('show');
          });

          $('.modal-footer').on('click', '.addSubKelompok', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/addSubKelompok',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'id_kel_sub': $('#id_kel_sub').val(),
                      'no_urut_sub': $('#no_urut_sub').val(),
                      'ur_subkel_ssh': $('#ur_subkel_ssh').val(),
                  },
                  success: function(data) {
                      if ((data.errors)){
                        $('.error').removeClass('hidden');
                          $('.error').text(data.errors.name1);
                      }
                      else {
                          $('.error').addClass('hidden');
                          $('#tblSubKelompok').DataTable().ajax.reload();
                      }
                  },
              });
          });

          //Edit Sub Kelompok
          $(document).on('click', '.edit-subkelompok', function() {
            $('#fooEditSKel').addClass('glyphicon-check');
            $('#fooEditSKel').removeClass('glyphicon-trash');
            $('.btnEditSKel').addClass('btn-success');
            $('.btnEditSKel').removeClass('btn-danger');
            $('.btnEditSKel').addClass('editSubKelompok');
            $('.modal-title').text('Edit Data Sub Kelompok SSH');
            $('.form-horizontal').show();
            $('#id_gol_sub_edit').val($(this).data('id_gol_sub'));
            $('#id_kel_sub_edit').val($(this).data('id_kel_sub'));
            document.getElementById("idgol_sub_edit").innerHTML = nm_gol_ssh;
            document.getElementById("idkel_sub_edit").innerHTML = nm_kel_ssh;
            $('#id_subkel_edit').val($(this).data('id_sub'));
            $('#no_urut_sub_edit').val($(this).data('no_urut_sub'));
            $('#ur_subkel_edit').val($(this).data('ur_sub'));
            $('#EditSubKelompok').modal('show');
          });

          $('.modal-footer').on('click', '.editSubKelompok', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/editSubKelompok',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'id_kel_sub': $("#id_kel_sub_edit").val(),
                      'id_subkel_edit': $("#id_subkel_edit").val(),
                      'no_urut_sub': $('#no_urut_sub_edit').val(),
                      'ur_subkel_ssh': $('#ur_subkel_edit').val(),
                  },
                  success: function(data) {
                      $('#tblSubKelompok').DataTable().ajax.reload();
                  }
              });
          });

          //Hapus SubKelompok
          $(document).on('click', '.delete-subkelompok', function() {
            $('#fooHapusSKel').removeClass('glyphicon-check');
            $('#fooHapusSKel').addClass('glyphicon-trash');
            $('.btnHapusSKel').removeClass('btn-success');
            $('.btnHapusSKel').addClass('btn-danger');
            $('.btnHapusSKel').addClass('delSubKelompok');
            $('.modal-title').text('Hapus Data Sub Kelompok SSH');
            $('.id_subkel_hapus').text($(this).data('id_sub'));
            $('.form-horizontal').hide();
            $('.uraian').html($(this).data('ur_sub'));
            $('#HapusSubKelompok').modal('show');
          });

          $('.modal-footer').on('click', '.delSubKelompok', function() {
            $.ajaxSetup({
               headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });

            $.ajax({
              type: 'post',
              url: './ssh/hapusSubKelompok',
              data: {
                '_token': $('input[name=_token]').val(),
                'id_subkel_hapus': $('.id_subkel_hapus').text()
              },
              success: function(data) {
                $('.item' + $('.id_subkel_hapus').text()).remove();
                $('#tblSubKelompok').DataTable().ajax.reload();
              }
            });


          });

          //tambah Item
          $(document).on('click', '.add-item', function() {
            $('#fooAItem').addClass('glyphicon-plus');
            $('#fooAItem').removeClass('glyphicon-trash');
            $('.btnAItem').addClass('btn-success');
            $('.btnAItem').removeClass('btn-danger');
            $('.btnAItem').addClass('addTarif');
            $('.modal-title').text('Tambah Data Item SSH');
            $('.form-horizontal').show();
            $('#id_gol_item').val(id_gol_ssh);
            $('#id_kel_item').val(id_kel_ssh);
            $('#id_sub_item').val(id_skel_ssh);
            document.getElementById("idgol_item").innerHTML = nm_gol_ssh;
            document.getElementById("idkel_item").innerHTML = nm_kel_ssh;
            document.getElementById("idsub_item").innerHTML = nm_skel_ssh;
            $('#TambahItem').modal('show');
          });

          $('.modal-footer').on('click', '.addTarif', function() {
              $.ajaxSetup({
                 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
              });

              $.ajax({
                  type: 'post',
                  url: './ssh/addItem',
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'id_sub_item': $('#id_sub_item').val(),
                      'no_urut_item': $('#no_urut_item').val(),
                      'ur_item_ssh': $('#ur_item_ssh').val(),
                      'id_satuan':$('#id_satuan_ssh').val(),
                  },
                  success: function(data) {
                      if ((data.errors)){
                        $('.error').removeClass('hidden');
                          $('.error').text(data.errors.name1);
                      }
                      else {
                          $('.error').addClass('hidden');
                          $('#tblTarif').DataTable().ajax.reload();
                      }
                  },
                });
              });

              //Edit Item
        $(document).on('click', '.edit-tarif', function() {
                $('#fooEditItem').addClass('glyphicon-check');
                $('#fooEditItem').removeClass('glyphicon-trash');
                $('.btnEditItem').addClass('btn-success');
                $('.btnEditItem').removeClass('btn-danger');
                $('.btnEditItem').addClass('editItem');
                $('.modal-title').text('Edit Data Item SSH');
                $('.form-horizontal').show();
                $('#id_gol_item_edit').val($(this).data('id_gol_item'));
                $('#id_kel_item_edit').val($(this).data('id_kel_item'));
                $('#id_sub_item_edit').val($(this).data('id_sub_item'));
                document.getElementById("idgol_item_edit").innerHTML = nm_gol_ssh;
                document.getElementById("idkel_item_edit").innerHTML = nm_kel_ssh;
                document.getElementById("idsub_item_edit").innerHTML = nm_skel_ssh;
                $('#id_item_edit').val($(this).data('id_item'));
                $('#no_urut_item_edit').val($(this).data('no_urut_item'));
                $('#ur_item_edit').val($(this).data('ur_item'));
                $('#id_satuan_edit').val($(this).data('id_satuan'));
                $('#EditItem').modal('show');
              });

              $('.modal-footer').on('click', '.editItem', function() {
                  $.ajaxSetup({
                     headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                  });

                  $.ajax({
                      type: 'post',
                      url: './ssh/editItem',
                      data: {
                          '_token': $('input[name=_token]').val(),
                          'id_sub_item': $("#id_sub_item_edit").val(),
                          'id_item_edit': $("#id_item_edit").val(),
                          'no_urut_item': $('#no_urut_item_edit').val(),
                          'ur_item_ssh': $('#ur_item_edit').val(),
                          'id_satuan':$('#id_satuan_edit').val(),
                      },
                      success: function(data) {
                          $('#tblTarif').DataTable().ajax.reload();
                      }
                  });
              });

              //Hapus Item
        $(document).on('click', '.delete-tarif', function() {
                $('#fooHapusItem').removeClass('glyphicon-check');
                $('#fooHapusItem').addClass('glyphicon-trash');
                $('.btnHapusItem').removeClass('btn-success');
                $('.btnHapusItem').addClass('btn-danger');
                $('.btnHapusItem').addClass('delItem');
                $('.modal-title').text('Hapus Data Item SSH');
                $('.id_item_hapus').text($(this).data('id_item'));
                $('.form-horizontal').hide();
                $('.uraian').html($(this).data('ur_item'));
                $('#HapusItem').modal('show');
              });

              $('.modal-footer').on('click', '.delItem', function() {
                $.ajaxSetup({
                   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                });

                $.ajax({
                  type: 'post',
                  url: './ssh/hapusItem',
                  data: {
                    '_token': $('input[name=_token]').val(),
                    'id_item_hapus': $('.id_item_hapus').text()
                  },
                  success: function(data) {
                    $('.item' + $('.id_item_hapus').text()).remove();
                    $('#tblTarif').DataTable().ajax.reload();
                  }
                });
              });

              //tambah Item
              $(document).on('click', '.add-rekening', function() {
                $('#fooARek').addClass('glyphicon-plus');
                $('#fooARek').removeClass('glyphicon-trash');
                $('.btnARek').addClass('btn-success');
                $('.btnARek').removeClass('btn-danger');
                $('.btnARek').addClass('addRekening');
                $('.modal-title').text('Tambah Data Rekening atas Item SSH');
                $('.form-horizontal').show();
                $('#id_gol_rek').val(id_gol_ssh);
                $('#id_kel_rek').val(id_kel_ssh);
                $('#id_sub_rek').val(id_skel_ssh);
                $('#id_item_rek').val(id_item_ssh);
                document.getElementById("idgol_rek").innerHTML = nm_gol_ssh;
                document.getElementById("idkel_rek").innerHTML = nm_kel_ssh;
                document.getElementById("idsub_rek").innerHTML = nm_skel_ssh;
                document.getElementById("iditem_rek").innerHTML = nm_item_ssh;
                $('#id_rek').val(null);
                $('#nm_rekening').val(null);
                $('#TambahRekening').modal('show');
              });

              $('.modal-footer').on('click', '.addRekening', function() {
                  $.ajaxSetup({
                     headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                  });

                  $.ajax({
                      type: 'post',
                      url: './ssh/addRekeningSsh',
                      data: {
                          '_token': $('input[name=_token]').val(),
                          'id_tarif_ssh': $('#id_item_rek').val(),
                          'id_rekening': $('#id_rek').val(),
                      },
                      success: function(data) {
                          if ((data.errors)){
                            $('.error').removeClass('hidden');
                              $('.error').text(data.errors.name1);
                          }
                          else {
                              $('.error').addClass('hidden');
                              $('#tblRekening').DataTable().ajax.reload();
                          }
                      },
                    });
                  });

                  //Edit Rekening
                  $(document).on('click', '.edit-rekening', function() {
                    $('#fooEditRek').addClass('glyphicon-check');
                    $('#fooEditRek').removeClass('glyphicon-trash');
                    $('.btnEditRek').addClass('btn-success');
                    $('.btnEditRek').removeClass('btn-danger');
                    $('.btnEditRek').addClass('editRekening');
                    $('.modal-title').text('Edit Data Rekening Belanja Item SSH');
                    $('.form-horizontal').show();
                    $('#id_gol_rek_edit').val($(this).data('id_gol_item'));
                    $('#id_kel_rek_edit').val($(this).data('id_kel_item'));
                    $('#id_sub_rek_edit').val($(this).data('id_sub_item'));
                    $('#id_item_rek_edit').val($(this).data('id_item'));
                    document.getElementById("idgol_rek_edit").innerHTML = nm_gol_ssh;
                    document.getElementById("idkel_rek_edit").innerHTML = nm_kel_ssh;
                    document.getElementById("idsub_rek_edit").innerHTML = nm_skel_ssh;
                    document.getElementById("iditem_rek_edit").innerHTML = nm_item_ssh;
                    $('#id_rekening_edit').val($(this).data('id_rekening_edit'));
                    $('#nm_rekening_edit').val($(this).data('kd_rekening')+" - "+$(this).data('ur_rekening'));
                    $('#id_rek_edit').val($(this).data('id_rek_edit'));
                    $('#EditRekening').modal('show');
                  });

                  $('.modal-footer').on('click', '.editRekening', function() {
                      $.ajaxSetup({
                         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                      });

                      $.ajax({
                          type: 'post',
                          url: './ssh/editRekeningSsh',
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'id_sub_item': $("#id_sub_rek_edit").val(),
                              'id_tarif_ssh': $("#id_item_rek_edit").val(),
                              'id_rekening': $('#id_rekening_edit').val(),
                              'id_rek_edit': $('#id_rek_edit').val(),
                          },
                          success: function(data) {
                              $('#tblRekening').DataTable().ajax.reload();
                          }
                      });
                  });

                  //Hapus Rekening
                  $(document).on('click', '.delete-rekening', function() {
                    $('#fooHapusRek').removeClass('glyphicon-check');
                    $('#fooHapusRek').addClass('glyphicon-trash');
                    $('.btnHapusRek').removeClass('btn-success');
                    $('.btnHapusRek').addClass('btn-danger');
                    $('.btnHapusRek').addClass('delRekening');
                    $('.modal-title').text('Hapus Data Rekening Belanja Item SSH');
                    $('.id_rek_hapus').text($(this).data('id_rek_hapus'));
                    $('.form-horizontal').hide();
                    $('.uraian').html($(this).data('ur_rekening'));
                    $('#HapusRekening').modal('show');
                  });

                  $('.modal-footer').on('click', '.delRekening', function() {
                    $.ajaxSetup({
                       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                    });

                    $.ajax({
                      type: 'post',
                      url: './ssh/hapusRekeningSsh',
                      data: {
                        '_token': $('input[name=_token]').val(),
                        'id_rek_hapus': $('.id_rek_hapus').text()
                      },
                      success: function(data) {
                        $('.item' + $('.id_rek_hapus').text()).remove();
                        $('#tblRekening').DataTable().ajax.reload();
                      }
                    });
                  });

  } );
</script>
@endsection