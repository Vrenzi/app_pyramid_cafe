<div class="col-lg-8 mb-4 shadow rounded d-flex align-items-center bg-transparent">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7 ps-3">
                <div class="card-body">
                    <h5 class="card-title text-primary">Selamat Datang, {{ auth()->user()->name }}! 🎉</h5>
                    <p class="mb-4 text-dark">
                    Periksa Pesanan hari ini.
                    </p>
                    <a href="javascript:;" class="btn btn-sm btn-primary text-white">View </a>
                </div>
            </div>
            {{-- <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="/images/dash-logo.png" height="200">
                </div>
            </div> --}}
            <div id="carouselExampleFade" class="col-sm-5 text-center text-sm-left carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner" style="padding-left: 25%;">
                    <div class="carousel-item active">
                        <img src="/images/foodicon/food-icon1.png" class="d-block" height="180" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/foodicon/food-icon2.png" class="d-block" height="180" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/foodicon/food-icon3.png" class="d-block" height="180" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

