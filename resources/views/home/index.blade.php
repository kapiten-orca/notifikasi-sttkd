@extends('layouts.index')
@section('title')
    Home
@endsection

@section('konten')
<div class="card-body">
  <form method="post" action="/index">
      @csrf
      <div class="modal-body">
          {{-- <div class="form-group row mt-2">
              <div class="col-lg-3 col-sm-12">
                  <select class="form-select" class="form-control" name="year" required>
                      <option value="" selected>Pilih Tahun</option>
                      @for ($i = 0; $i < count($data["filter_tahun"]); $i++)
                          <option value='{{ $data["filter_tahun"][$i]["filterTahun"] }}'>{{ $data["filter_tahun"][$i]["filterTahun"] }}</option>
                      @endfor
                  </select>
              </div>
              <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div> --}}
      </div>
  </form>
</div>
<div class="d-flex justify-content-around">
    <div class="card  mb-3 border border border-primary mx-5" style="max-width: 18rem; max-height: 30rem;">
      <div class="card-header text-bg-primary d-flex justify-content-between">
        Pendaftar yang sudah membayar
        <a class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body ">
        <div>
          Some quick example text to build on the card title and make up the bulk of the card's content.
        </div>
      </div>
    </div> 
    <div class="card  mb-3 border border border-primary mx-5" style="max-width: 18rem; max-height: 30rem;">
      <div class="card-header text-bg-primary text-light d-flex justify-content-between">
        BANK
        <a href="/akademik" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div> 
    <div class="card  mb-3 border border border-primary mx-5" style="max-width: 18rem; max-height: 30rem;">
      <div class="card-header text-bg-primary d-flex justify-content-between">
        Bypass 0
        <a href="/ptb" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div> 
    <div class="card  mb-3 border border border-primary mx-5" style="max-width: 18rem; max-height: 30rem;">
      <div class="card-header text-bg-primary d-flex justify-content-between">
        Bayar Uang Masuk
        <a href="/ptb" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div> 
</div>

<div class="container ">
  <div class="row mx-3">
    <div class="col-xl-6">
        <div class="card my-4">
            <div class="card-body border border-primary"><canvas id="tarunaBayarUangDaftarTahunnn" width="100%" height="60"></canvas></div>
                <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#tarunaBayarUangDaftarTahunnn'), {
                    type: 'bar',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"],
                        datasets: [{
                        label: 'Taruna',
                        data: [31, 20, 50, 45, 67, 24, 48, 89, 89, 91, 15, 50],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            
                        ],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                    });
                });
                </script>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card my-4">
          <div class="card-body border border-primary"><canvas id="tarunaBayarUangDaftarTahunn" width="100%" height="60"></canvas></div>
              <script>
              document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#tarunaBayarUangDaftarTahunn'), {
                  type: 'bar',
                  data: {
                      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"],
                      datasets: [{
                      label: 'Taruna',
                      data: [31, 20, 50, 45, 67, 24, 48, 89, 89, 91, 15, 50],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          
                      ],
                      borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          
                      ],
                      borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                      y: {
                          beginAtZero: true
                      }
                      }
                  }
                  });
              });
              </script>
      </div>
      </div>
    
</div>

@endsection
