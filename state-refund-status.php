<?php include 'global-templates/header.php'; ?>

<!-- site wrapper start -->
<div class="main-wrapper">
  <!-- nav Sidebar attached -->
  <?php include 'global-templates/sidebar.php'; ?>
  <div class="site-wrapper">
    <div class="inside-wrpper">
      <h1>Select Your State Return</h1>

      <div class="row align-items-center mt-4">
        <div class="col-lg-7">
          <div class="map-section">
            <?php include 'global-templates/map.php'; ?>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="form-section">

            <p>To check the status of your state refund, find your state website below.</p>
            <form class="form">
              <select class="form-select form-control" onchange="window.open(this.value, '_blank')">
                <option>Please choose a State Resource Website</option>
                 <option value="http://www.ador.state.al.us">Alabama Department of Revenue</option>
                <!-- <option value="http://www.revenue.state.ak.us">Alaska Department of Revenue</option> -->
                 <option value="http://www.revenue.state.az.us">Arizona Department of Revenue</option>
                 <option value="http://www.state.ar.us">Arkansas Department of Revenue</option>
                 <option value="http://www.ftb.ca.gov">California Franchise Tax Board</option>
                 <option value="http://www.taxcolorado.com">Colorado Department of Revenue</option>
                 <option value="http://www.ct.gov/drs">Connecticut Department of Revenue Services</option>
                 <option value="http://www.state.de.us/revenue/default.shtml">Delaware Office of Tax and Revenue</option>
                <!-- <option value="http://cfo.dc.gov/otr/site/default.asp">District of Columbia Office of the Chief Financial Officer</option> -->
                <!-- <option value="http://sun6.dms.state.fl.us/dor">Florida Department of Revenue</option> -->
                <!-- <option value="http://www.etax.dor.ga.gov">Georgia Department of Revenue</option> -->
                 <option value="http://www.state.hi.us/tax/tax.html">Hawaii Department of Taxation</option>
                 <option value="http://tax.idaho.gov/index.html">Idaho State Tax Commission</option>
                 <option value="http://www.revenue.state.il.us">Illinois Department of Revenue</option>
                 <option value="http://www.ai.org/dor/index.html">Indiana Department of Revenue</option>
                 <option value="http://www.state.ia.us/tax/index.html">Iowa Department of Revenue</option>
                 <option value="http://www.ksrevenue.org">Kansas Department of Revenue</option>
                 <option value="http://revenue.ky.gov">Kentucky Department of Revenue</option>
                 <option value="http://www.rev.state.la.us">Louisiana Department of Revenue</option>
                 <option value="http://www.state.me.us/revenue">Maine Revenue Services</option>
                 <option value="http://www.comp.state.md.us/default.asp">Maryland Comptroller of the Treasury</option>
                 <option value="http://www.dor.state.ma.us">Massachusetts Department of Revenue</option>
                 <option value="http://www.michigan.gov/treasury">Michigan Department of the Treasury</option>
                 <option value="http://www.state.mn.us/ebranch/mdor">Minnesota Department of Revenue</option>
                <!-- <option value="http://www.dor.ms.gov/">Mississippi State Tax Commission</option> -->
                <!-- <option value="http://www.dor.mo.gov">Missouri Department of Revenue</option> -->
                 <option value="http://www.state.mt.us/revenue">Montana Department of Revenue</option>
                 <option value="http://www.revenue.state.ne.us/index.html">Nebraska Department of Revenue</option>
                <!-- <option value="http://tax.state.nv.us">Nevada Department of Taxation</option> -->
                 <option value="http://www.state.nh.us/revenue/index.htm">New Hampshire Department of Revenue</option>
                 <option value="http://www.state.nj.us/treasury/index.shtml">New Jersey Department of Treasury</option>
                 <option value="http://www.state.nm.us/tax">New Mexico Taxation and Revenue Department</option>
                 <option value="http://www.tax.state.ny.us">New York State Department of Taxation and Finance</option>
                <!-- <option value="http://www.ci.nyc.ny.us/html/dof/home.html">New York City Department of Finance</option> -->
                 <option value="http://www.dor.state.nc.us">North Carolina Department of Revenue</option>
                 <option value="http://www.nd.gov/tax/index.html">North Dakota Office of State Commissioner</option>
                 <option value="http://www.state.oh.us/tax">Ohio Department of Taxation</option>
                 <option value="http://www.oktax.state.ok.us">Oklahoma Tax Commission</option>
                 <option value="http://www.oregon.gov/DOR">Oregon Department of Revenue</option>
                 <option value="http://www.revenue.state.pa.us">Pennsylvania Department of Revenue</option>
                 <option value="http://www.tax.state.ri.us">Rhode Island Division of Taxation</option>
                <!-- <option value="http://www.sctax.org/default.htm">South Carolina Department of Revenue</option> -->
                <!-- <option value="http://www.state.sd.us/drr2/revenue.html">South Dakota Department of Revenue and Regulation</option> -->
                <!-- <option value="http://www.state.tn.us/revenue">Tennessee Department of Revenue</option> -->
                <!-- <option value="http://www.cpa.state.tx.us">Texas Comptroller of Public Accounts</option> -->
                 <option value="http://tax.utah.gov">Utah State Tax Commission</option>
                 <option value="http://www.state.vt.us/tax">Vermont Department of Taxes</option>
                 <option value="http://www.tax.virginia.gov">Virginia Department of Taxation</option>
                <!-- <option value="http://dor.wa.gov">Washington State Department of Revenue</option> -->
                 <option value="http://www.state.wv.us/taxrev">West Virginia State Tax Department</option>
                 <option value="http://www.dor.state.wi.us">Wisconsin Department of Revenue</option>
                <!-- <option value="http://revenue.state.wy.us">Wyoming Department of Revenue</option> -->
              </select>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>

<?php include 'global-templates/footer.php'; ?>