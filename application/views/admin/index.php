<div class="row mt-2">	
	<div class="col-md-6 col-lg-4">
	    <div class="statistic__item statistic__item--green">
	        <h2 class="number"><?= $jml_user ?></h2>
	        <span class="desc">Anggota</span>
	        <div class="icon">
	            <i class="zmdi zmdi-account-o"></i>
	        </div>
	    </div>
	</div>
	<div class="col-md-6 col-lg-4">
	    <div class="statistic__item statistic__item--blue">
	        <h2 class="number"><?= $laporan ?></h2>
	        <span class="desc">Pengaduan</span>
	        <div class="icon">
	            <i class="zmdi zmdi-calendar-note"></i>
	        </div>
	    </div>
	</div>
	<div class="col-md-6 col-lg-4">
        <div class="statistic__item statistic__item--orange">
            <h2 class="number"><?= $cabang ?></h2>
            <span class="desc">Cabang</span>
            <div class="icon">
                <i class="zmdi zmdi-city-alt"></i>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-6 col-xs-12">
    <div class="au-card m-b-30">
        <div class="au-card-inner">
        	<div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
        	<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        		<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
        			
        		</div>
        	</div>
        	<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        		<div style="position:absolute;width:200%;height:200%;left:0; top:0">
        			
        		</div>
        	</div>
        </div>
            <h3 class="title-2 m-b-40">Laporan Masuk Per Bulan</h3>
            <canvas id="chartLaporan" height="196" style="display: block; width: 392px; height: 196px;" width="392" class="chartjs-render-monitor"></canvas>
        </div>
    </div>
</div>

