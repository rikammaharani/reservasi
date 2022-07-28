@extends('layouts.main')
@section('title','Kamar Baru')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Kamar Baru</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="room_name">Nama Kamar</label>
                            <input type="text" class="form-control" id="room_name" placeholder="Enter room's name"
                                name="room_name" value="{{ old('room_name') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Tipe Kamar</label>
                            <select class="form-control select2" name="room_type" value="{{ old('room_type') }}"
                                required>
                                <option value="Standard Room">Standard Room</option>
                                <option value="Single Room">Single Room</option>
                                <option value="Twin Room">Twin Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Family Room">Family Room</option>
                                <option value="Connecting Room">Connecting Room</option>
                                <option value="Superior Room">Superior Room</option>
                                <option value="Junior Suite Room">Junior Suite Room</option>
                                <option value="Suite Room">Suite Room</option>
                                <option value="Presidental Suite">Presidental Suite</option>
                                <option value="Special Room">Special Room</option>
                                <option value="Custom Room">Custom Room</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for="room_price">Harga Kamar</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="room_price" placeholder="Enter room's price"
                                name="room_price" value="{{ old('room_price') }}" min="0" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label for="room_capacity">Kapasitas Kamar</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="room_capacity"
                                placeholder="Enter room's capacity" name="room_capacity"
                                value="{{ old('room_capacity') }}" min="0" required>
                            <div class="input-group-append">
                                <span class="input-group-text">Person</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="bed_info">Informasi Tempat Tidur</label>
                            <input type="text" class="form-control" id="bed_info" placeholder="Enter bed's information"
                                name="bed_info" value="{{ old('bed_info') }}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <label style="display: block;">Upload Banner</label>
                        <div class="input-file mb-3">
                            <input type="file" class="dropzone" id="photo-post" name="banner"
                                style="border: 1px dashed grey; padding: 10px; border-radius: 4px; width:80%" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label style="display: block;">Upload Gambar Unggulan</label>
                        <div class="input-file mb-3">
                            <input type="file" class="dropzone" id="photo-post" name="featured_img"
                                style="border: 1px dashed grey; padding: 10px; border-radius: 4px; width:80%" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection

@push('after-script')

<script>
    //Initialize Select2 Elements
    $('.select2').select2()

</script>

<script>
    $(document).ready(function () {
        $('#addfield').click(function () {
            $('.wrapper-field').append(
                `<div class="input-file mb-3">
                    <input type="file" class="dropzone" id="photo-post"
                                        name="file_name[]" style="border: 1px dashed grey; padding: 10px; border-radius: 4px; width:80%">
                    <a class="removefield btn btn-danger"><i class="fas fa-times"></i></a>
                </div>`
            )
        });
    });

    $(document).ready(function () {
        $("body").on("click", ".removefield", function () {
            $(this).parents(".input-file").remove();
        });
    });
</script>

<script>
    // Create Facility
    $('#btn-add').click(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();

        let formData = {
            hook: $('#hook').val(),
            facility: $('#facility').val(),
        };

        let state = $('#btn-add').val();
        let type = "POST";
        let facility_id = $('#facility_id').val();
        let ajaxurl = 'room';

        $.ajax({
            type: type,
            url: ajaxurl,
            data : formData,
            dataType: 'json',
            success: function(data){
                let facilities = `
                <tr id="facilities${data.id}">
                    <td>${data.facility}</td>
                    <td>Hapus</td>
                </tr>`
            },
            error: function(data){
                alert(data);
            }
        });
    });
</script>
@endpush
