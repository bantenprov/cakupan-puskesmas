<template>
  <div>

    <div class="card mb-3">
      <div class="card-header">Grafik Produk Domestik Regional Bruto</div>
      <div class="card-body">
        <echarts-cakupan-puskesmas></echarts-cakupan-puskesmas>
      </div><!-- /.card-body -->
    </div><!-- /.card -->

    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Grafik Kota</div>
          <div class="card-body">
            <echarts-cakupan-puskesmas-kota></echarts-cakupan-puskesmas-kota>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Grafik Tahunan</div>
          <div class="card-body">
            <echarts-cakupan-puskesmas-tahun></echarts-cakupan-puskesmas-tahun>
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>
    </div>

  </div>
</template>
