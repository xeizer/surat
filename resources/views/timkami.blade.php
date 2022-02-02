@extends('surat/layout')
@section('content')
<div class="container">
<!-- IF Admin == True, show Add, Edit, Delete else IF Admin == False, hidden Add, Edit, Delete -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addPerson"><span class="fas fa-plus"></span> Add Person</button>
    <div class="row justify-content-center text-center">
        <!-- LOOP -->
        <div class="col-3 m-3">
            <div class="card h-100" style="width: 250px;">
                <img src="{{asset('foto/pp.jpg')}}" class="card-img-top ratio-1x1 rounded-circle mx-auto mt-3" style="width: 150px; height:auto">
                <div class="card-body">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">Jabatan</p>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <a href="#"><span class="fab fa-github"></span></a>
                        </div>
                        <div class="col-2">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                        </div>
                        <div class="col-2">
                            <a href="#"><span class="fab fa-instagram"></span></a>
                        </div>
                        <div class="col-2">
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                        <div class="col-2">
                            <a href="#"><span class="fab fa-twitter"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LOOP -->
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="addPerson" tabindex="-1" role="dialog" aria-labelledby="addPersonLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addPersonLabel">Add Person</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="row m-1">
                <div class="col-4">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                </div>
                <div class="col-8">
                    <input type="text" name="" id="" class="form-control">
                </div>
            </div>

            <div class="row m-1">
                <div class="col-4">
                    <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                </div>
                <div class="col-8">
                    <input type="text" name="" id="" class="form-control">
                </div>
            </div>
            <div class="row m-1 mt-2">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="toggle1(this)">
                        <label class="form-check-label" for="github">
                            Github
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <input type="text" name="github" disabled id="field1" class="form-control" placeholder="https://github.com/yourname">
                </div>
            </div>

            <script>
                function toggle1(flag){
                console.log(flag.checked)
                const trea = document.getElementById('field1')
                if (trea.hasAttribute("disabled")) {
                trea.removeAttribute("disabled")
                } else {
                trea.setAttribute("disabled", "true")
                }
                }
            </script>

                <div class="row m-1">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="toggle2(this)">
                        <label class="form-check-label" for="facebook">
                            facebook
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <input type="text" name="facebook" disabled id="field2" class="form-control" placeholder="https://facebook.com/yourname">
                </div>
            </div>

            <script>
                function toggle2(flag){
                console.log(flag.checked)
                const trea = document.getElementById('field2')
                if (trea.hasAttribute("disabled")) {
                trea.removeAttribute("disabled")
                } else {
                trea.setAttribute("disabled", "true")
                }
                }
            </script>

            <div class="row m-1">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="toggle3(this)">
                        <label class="form-check-label" for="instagram">
                            instagram
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <input type="text" name="instagram" disabled id="field3" class="form-control" placeholder="https://instagram.com/yourname">
                </div>
            </div>

            <script>
                function toggle3(flag){
                console.log(flag.checked)
                const trea = document.getElementById('field3')
                if (trea.hasAttribute("disabled")) {
                trea.removeAttribute("disabled")
                } else {
                trea.setAttribute("disabled", "true")
                }
                }
            </script>

            <div class="row m-1">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="toggle4(this)">
                        <label class="form-check-label" for="youtube">
                            youtube
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <input type="text" name="youtube" disabled id="field4" class="form-control" placeholder="https://youtube.com/yourname">
                </div>
            </div>

            <script>
                function toggle4(flag){
                console.log(flag.checked)
                const trea = document.getElementById('field4')
                if (trea.hasAttribute("disabled")) {
                trea.removeAttribute("disabled")
                } else {
                trea.setAttribute("disabled", "true")
                }
                }
            </script>

            <div class="row m-1">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="toggle5(this)">
                        <label class="form-check-label" for="twitter">
                            twitter
                        </label>
                    </div>
                </div>
                <div class="col-8">
                    <input type="text" name="twitter" disabled id="field5" class="form-control" placeholder="https://twitter.com/yourname">
                </div>
            </div>

            <script>
                function toggle5(flag){
                console.log(flag.checked)
                const trea = document.getElementById('field5')
                if (trea.hasAttribute("disabled")) {
                trea.removeAttribute("disabled")
                } else {
                trea.setAttribute("disabled", "true")
                }
                }
            </script>
            <div class="row m-1 mt-4">
                <div class="col-4">
                    <p class="col-sm-12 col-form-label">Foto Profil 1x1</p>
                </div>
                <div class="col-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Save changes</button>
      </div>
    </div>
  </div>
@endsection