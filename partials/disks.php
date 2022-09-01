    <div id="app">

        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-xl-6 py-5 justify-content-center">
                  <div class="col py-3" v-for="disk in discs" :key="disk.author">
                    <div class="card h-100 align-items-center" >
                        <img :src="disk.poster" class="card-img-top" :alt="disk.author" />
                            <div class="card-body text-center">
                            <h5 class="card-title text-white">
                            {{ disk.title.toUpperCase() }}
                            </h5>
                            <p class="card-text text-muted m-0">{{ disk.author }}</p>
                            <p class="card-text text-muted">{{ disk.year }}</p>
                            </div>
                    </div>
                        <!-- ./card -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./row -->
        </div>

    </div>
 <!-- /#app -->
