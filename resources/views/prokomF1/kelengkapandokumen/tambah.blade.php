@extends('layouts.master')
@section('title', 'Tambah Kelengkapan Dokumen')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Input Kelengkapan Dokumen Untuk Prokom Sales & Commercial</h1>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <form action="{{ route('kelengkapan-dokumen-simpan') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>* Vendor Baru/Lama </label><br>
                                        <input type="radio" name="vendor" value="0" id="vendor"> Lama <br>
                                        <input type="radio" name="vendor" value="1" id="vendor"> Baru <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <u><b> Kelengkapan dokumen penagihan :</b></u><br><br>
                                    <div class="form-group">
                                        <label>1. Kwitansi / Invoice bermaterai atas nama PT Savoria Kreasi Rasa
                                        </label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>2. Faktur Pajak atas nama PT Savoria Kreasi Rasa</label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>3. Surat perjanjian kerjasama / Prokom</label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>4. Berita Acara Serah Terima (BAST)/Surat Jalan/Report /
                                            Dokumentasi</label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>5. Faktur Penjualan</label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>6. Copy PO</label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>7. Quotation dengan rincian biaya</label><br>
                                        <input type="radio" name="kwitansi" value="0" id="kwitansi"> Ya <br>
                                        <input type="radio" name="kwitansi" value="1" id="kwitansi"> Tidak <br>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>8. Lampiran</label><br>
                                        <u><b>Deskripsi Lampiran: </b></u><br><br>
                                        <textarea name="lampiran" class="form-control" style="height: 100px"></textarea>
                                        <a style="margin-top: 10px" data-collapse="#mycard-collapse"
                                            class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a> Tambah
                                        Lampiran

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('page-script')

@endpush
