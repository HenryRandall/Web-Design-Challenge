<?php
echo
<div class="navigation">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.html">COVID-19 Anaylsis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Plots</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="hosplot.html">Hospital Quality</a>
            <a class="dropdown-item" href="popdenplot.html">Population Density</a>
            <a class="dropdown-item" href="povrateplot.html">Poverty Rate</a>
            <a class="dropdown-item" href="mhiplot.html">Median Household Income</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Heatmaps</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="confirms.html">Confirmed Cases</a>
            <a class="dropdown-item" href="deaths.html">Deaths</a>
            <a class="dropdown-item" href="popden.html">Population Density</a>
            <a class="dropdown-item" href="povrate.html">Poverty Rate</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comparisons.html">Comparison</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="state.html">State Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="county.html"> County Data</a>
        </li>
      </ul>
    </div>
  </nav>
</div>;
?>