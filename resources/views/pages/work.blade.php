@extends('layouts.layout-master')

@section('keywords')
@endsection

@section('title')
  <title>Work experience</title>
@endsection

@section('navigation')
  <div class="row"><div class="col-xs-12">@include('partials.navigation.nav-bar')</div>
@endsection


@section('content')
  <div id="div-content-txt" class="col-xs-12 rtb">
    <div id="div-content-txt-inner" class="container">
      <h2>Laravel Developer - Suresite Group Ltd, Preston, Lancs.</h2>
      <h3>April 2017 – August 2017 (temporary contract)</h3>
      <p>Suresite provides Compliance / Risk Management, Card Services, and Wetstock Management
        solutions to the retail petroleum sector.
        Responsibility for the ongoing development of their CDM system. The Laravel PHP framework
        was used in conjunction with PHP Storm (IDE), and Team Foundation Server / Git. The database
        used was Microsoft SQL Server.</p>
        <p>The Laravel development stack employed the following components:</p>
        <ul class="bullet-list">
          <li>Composer (dependency management)</li>
          <li>Eloquent (O/RM)</li>
          <li>Routing engine (including RESTful)</li>
          <li>Layouts (including use of Bootstrap)</li>
          <li>Blade templating engine</li>
          <li>View composers</li>
          <li>Jquery (including AJAX techniques)</li>
          <li>Elixir (asset compilation of JS / SASS)</li>
        </ul>

        <h2>Analyst Programmer – Birmingham Clincal Trials Unit, University of
          Birmingham - Birmingham, UK</h2>
          <h3>April 2011 to October 2015</h3>
          <p>The University of Birmingham Clinical Trials Unit (BCTU) is a leading national clinical trials
            unit, specialising in the design, conduct and analysis of definitive clinical trials and test
            evaluation studies. Responsibility for the provision of validated Clinical Trials Systems, covering all
            aspects of the SDLC, including:</p>
            <ul class="bullet-list">
              <li>Analysis</li>
              <li>Design</li>
              <li>Testing</li>
              <li>Implementation</li>
              <li>Support</li>
              <li>Using XML based code generation tools to develop ASP.net (C#) web applications with a</li>
              <li>SQL Server backend.</li>
            </ul>

            <h2>Analyst Programmer, Cancer Research UK Clinical Trials Unit,
              University of Birmingham, UK</h2>
              <h3>December 2001 - April 2011</h3>
              <p>The Cancer Research UK Clinical Trials Unit (CRCTU) translates cutting edge science into
                improved patient care, both rapidly and safely, through the design and conduct of large
                multi-centre/international randomised trials as well as smaller more data intensive phase
                I trials of novel therapies. Main responsibilties included:</p>
                <ul class="bullet-list">
                  <li>Data collection systems</li>
                  <li>Randomisation algorithms</li>
                  <li>Integration &amp; maintenance of the Data Warehouse system</li>
                  <li>Sample tracking &amp; storage systems</li>
                  <li>Database Administration - backups / restores, optmisation, user management,</li>
                  <li>quota management etc.</li>
                </ul>

                <p>Most systems were developed using using ASP.NET (vb.net), with SQL server databases.
                  There were several legacy MS Access ADP clients (ODBC), programmed in VBA. SSMS was
                  used for database management (T-SQL DML/DDL).</p>

                  <h2>Data Manager, Cancer Research UK Clinical Trials Unit , University of
                    Birmingham, UK</h2>
                    <h3>July 2001 to December 2001</h3>
                    <p>Responsibility for the day-to-day running of a breast cancer
                      trial (ATOM). including:</p>
                      <ul class="bullet-list">
                        <li>Entering patients on the trial, via randomisation wizard</li>
                        <li>Data-entry</li>
                        <li>Adverse event reporting</li>
                        <li>Collation of treatment records</li>
                        <li>Generating data queries and reports</li>
                        <li>Managing participating clinicians (data warehouse)</li>
                        <li>Managing participating centres (data warehouse)</li>
                      </ul>

                      <h2>Computer / Trackside Engineer, Synstar International, Birmingham, UK</h2>
                      <h3>1999 to July 2001</h3>
                      <p>Synstar International provided IT Support &amp;Business Continuity services, principally in the
                        automotive sector. The role was based at Jaguar Car plants, fulfilling a mission-critical role in
                        business continuity. Providing hardware support across a range of devices in compliance with
                        a rigorous Service Level Agreement.</p>
                        <ul class="bullet-list">
                          <li>Installation &amp;support of servers and desktop PCs</li>
                          <li>Offsite Backups</li>
                          <li>Monitoring of UNIX fail-over cluster</li>
                          <li>Configuration of wireless devices</li>
                          <li>Installation &amp;service of terminals, printers, barcode scanners etc.</li>
                        </ul>
                        <h2>Technical Data Processor Bechtel Water Technology - Risley, UK</h2>
                        <h3>1997 to 1999</h3>
                        <p>Bechtel Water Technology, based at Chadwick House, Risley, near Warrington, is the water
                          engineering Centre of Excellence for Bechtel Group, Inc. The position was based in the wastewater
                          section, working on the Asset Management Programme (AMP).</p>
                          <ul class="bullet-list">
                            <li>Data-entry</li>
                            <li>Writing data queries</li>
                            <li>Database backup</li>
                          </ul>
                        </div>
                      </div>
                    @endsection


                    @section('footer')
                      <div class="row">
                        <div class="col-xs-12">
                          @include('partials.footers.footer')
                        </div>
                      </div>
                    @endsection
