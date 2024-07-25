@extends('admin.layouts.index')
@include('admin.layouts.components.asset_validasi')

@section('title')
    <h1>
        Data Pertanyaan
        <small>{{ $action }} Data</small>
    </h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('buku_pertanyaan') }}">Data Pertanyaan</a></li>
    <li class="active">{{ $action }} Data</li>
@endsection

@section('content')
    @include('admin.layouts.components.notifikasi')

    <div class="box box-info">
        <div class="box-header with-border">
            <a href="{{ route('buku_pertanyaan') }}" class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                <i class="fa fa-arrow-circle-left "></i>Kembali ke Data Pertanyaan
            </a>
        </div>

        {!! form_open($form_action, 'id="validasi"') !!}
        <div class="box-body">
            <div class="form-group">
                <label>Pertanyaan</label>
                <textarea name="pertanyaan" class="form-control input-sm required" placeholder="Isi Pertanyaan" rows="5">{{ $data_pertanyaan->pertanyaan }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tampil</label>
                        <select class="form-control select2" name="status">
                            @foreach (\App\Enums\StatusEnum::all() as $key => $value)
                                <option value="{{ $key }}" @selected($key == $data_pertanyaan->status)>{{ $value }}
                                </option>
                            @endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i>
                Simpan</button>
        </div>
        </form>
    </div>
@endsection
