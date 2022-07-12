@extends('panel.layouts.app')

@section('body-content')

        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Sales Overview</h3>
                                        <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <ul class="list-inline">
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-success"><i class="fa fa-circle font-10 me-2 "></i>Ample
                                                </h6>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-info"><i class="fa fa-circle font-10 me-2"></i>Pixel
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" style="position: relative;">
                                <div id="sales-overview" style="height: 360px; min-height: 345px;">
                                    <div id="apexcharts0gf6f3mzl"
                                         class="apexcharts-canvas apexcharts0gf6f3mzl apexcharts-theme-light"
                                         style="width: 1019px; height: 330px;">
                                        <svg id="SvgjsSvg1655" width="1019" height="330"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 10)"
                                             style="background: transparent;">
                                            <g id="SvgjsG1657" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(37.21199035644531, 30)">
                                                <defs id="SvgjsDefs1656">
                                                    <linearGradient id="SvgjsLinearGradient1661" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop1662" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1663" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1664" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask0gf6f3mzl">
                                                        <rect id="SvgjsRect1666" width="980.7880096435547"
                                                              height="262.494" x="-4.5" y="-2.5" rx="0" ry="0"
                                                              opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask0gf6f3mzl">
                                                        <rect id="SvgjsRect1667" width="975.7880096435547"
                                                              height="261.494" x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke="none" stroke-dasharray="0"
                                                              fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1665" width="20.824028778076173" height="257.494"
                                                      x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke-dasharray="3" fill="url(#SvgjsLinearGradient1661)"
                                                      class="apexcharts-xcrosshairs" y2="257.494" filter="none"
                                                      fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1687" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1688" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)">
                                                        <text id="SvgjsText1690" font-family="Poppins,sans-serif"
                                                              x="69.4134292602539" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1691">Mon</tspan>
                                                            <title>Mon</title></text>
                                                        <text id="SvgjsText1693" font-family="Poppins,sans-serif"
                                                              x="208.24028778076172" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1694">Tue</tspan>
                                                            <title>Tue</title></text>
                                                        <text id="SvgjsText1696" font-family="Poppins,sans-serif"
                                                              x="347.06714630126953" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1697">Wed</tspan>
                                                            <title>Wed</title></text>
                                                        <text id="SvgjsText1699" font-family="Poppins,sans-serif"
                                                              x="485.89400482177734" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1700">Thu</tspan>
                                                            <title>Thu</title></text>
                                                        <text id="SvgjsText1702" font-family="Poppins,sans-serif"
                                                              x="624.7208633422852" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1703">Fri</tspan>
                                                            <title>Fri</title></text>
                                                        <text id="SvgjsText1705" font-family="Poppins,sans-serif"
                                                              x="763.547721862793" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1706">Sat</tspan>
                                                            <title>Sat</title></text>
                                                        <text id="SvgjsText1708" font-family="Poppins,sans-serif"
                                                              x="902.3745803833008" y="286.494" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#a1aab2"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Poppins, sans-serif;">
                                                            <tspan id="SvgjsTspan1709">Sun</tspan>
                                                            <title>Sun</title></text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1722" class="apexcharts-grid">
                                                    <g id="SvgjsG1723" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1725" x1="0" y1="0" x2="971.7880096435547"
                                                              y2="0" stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1726" x1="0" y1="64.3735"
                                                              x2="971.7880096435547" y2="64.3735"
                                                              stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1727" x1="0" y1="128.747"
                                                              x2="971.7880096435547" y2="128.747"
                                                              stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1728" x1="0" y1="193.12050000000002"
                                                              x2="971.7880096435547" y2="193.12050000000002"
                                                              stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1729" x1="0" y1="257.494"
                                                              x2="971.7880096435547" y2="257.494"
                                                              stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1724" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1731" x1="0" y1="257.494" x2="971.7880096435547"
                                                          y2="257.494" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1730" x1="0" y1="1" x2="0" y2="257.494"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1668" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1669" class="apexcharts-series" rel="1"
                                                       seriesName="Pixelx" data:realIndex="0">
                                                        <path id="SvgjsPath1671"
                                                              d="M 48.58940048217774 257.494L 48.58940048217774 64.3735L 64.4134292602539 64.3735L 64.4134292602539 64.3735L 64.4134292602539 257.494L 64.4134292602539 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 48.58940048217774 257.494L 48.58940048217774 64.3735L 64.4134292602539 64.3735L 64.4134292602539 64.3735L 64.4134292602539 257.494L 64.4134292602539 257.494z"
                                                              pathFrom="M 48.58940048217774 257.494L 48.58940048217774 257.494L 64.4134292602539 257.494L 64.4134292602539 257.494L 64.4134292602539 257.494L 48.58940048217774 257.494"
                                                              cy="64.3735" cx="184.91625900268554" j="0" val="9"
                                                              barHeight="193.12050000000002"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1672"
                                                              d="M 187.41625900268554 257.494L 187.41625900268554 150.20483333333334L 203.24028778076172 150.20483333333334L 203.24028778076172 150.20483333333334L 203.24028778076172 257.494L 203.24028778076172 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 187.41625900268554 257.494L 187.41625900268554 150.20483333333334L 203.24028778076172 150.20483333333334L 203.24028778076172 150.20483333333334L 203.24028778076172 257.494L 203.24028778076172 257.494z"
                                                              pathFrom="M 187.41625900268554 257.494L 187.41625900268554 257.494L 203.24028778076172 257.494L 203.24028778076172 257.494L 203.24028778076172 257.494L 187.41625900268554 257.494"
                                                              cy="150.20483333333334" cx="323.74311752319335" j="1"
                                                              val="5" barHeight="107.28916666666669"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1673"
                                                              d="M 326.24311752319335 257.494L 326.24311752319335 193.12050000000002L 342.06714630126953 193.12050000000002L 342.06714630126953 193.12050000000002L 342.06714630126953 257.494L 342.06714630126953 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 326.24311752319335 257.494L 326.24311752319335 193.12050000000002L 342.06714630126953 193.12050000000002L 342.06714630126953 193.12050000000002L 342.06714630126953 257.494L 342.06714630126953 257.494z"
                                                              pathFrom="M 326.24311752319335 257.494L 326.24311752319335 257.494L 342.06714630126953 257.494L 342.06714630126953 257.494L 342.06714630126953 257.494L 326.24311752319335 257.494"
                                                              cy="193.12050000000002" cx="462.56997604370116" j="2"
                                                              val="3" barHeight="64.3735"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1674"
                                                              d="M 465.06997604370116 257.494L 465.06997604370116 107.28916666666666L 480.89400482177734 107.28916666666666L 480.89400482177734 107.28916666666666L 480.89400482177734 257.494L 480.89400482177734 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 465.06997604370116 257.494L 465.06997604370116 107.28916666666666L 480.89400482177734 107.28916666666666L 480.89400482177734 107.28916666666666L 480.89400482177734 257.494L 480.89400482177734 257.494z"
                                                              pathFrom="M 465.06997604370116 257.494L 465.06997604370116 257.494L 480.89400482177734 257.494L 480.89400482177734 257.494L 480.89400482177734 257.494L 465.06997604370116 257.494"
                                                              cy="107.28916666666666" cx="601.396834564209" j="3"
                                                              val="7" barHeight="150.20483333333337"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1675"
                                                              d="M 603.896834564209 257.494L 603.896834564209 150.20483333333334L 619.7208633422852 150.20483333333334L 619.7208633422852 150.20483333333334L 619.7208633422852 257.494L 619.7208633422852 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 603.896834564209 257.494L 603.896834564209 150.20483333333334L 619.7208633422852 150.20483333333334L 619.7208633422852 150.20483333333334L 619.7208633422852 257.494L 619.7208633422852 257.494z"
                                                              pathFrom="M 603.896834564209 257.494L 603.896834564209 257.494L 619.7208633422852 257.494L 619.7208633422852 257.494L 619.7208633422852 257.494L 603.896834564209 257.494"
                                                              cy="150.20483333333334" cx="740.2236930847168" j="4"
                                                              val="5" barHeight="107.28916666666669"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1676"
                                                              d="M 742.7236930847168 257.494L 742.7236930847168 42.91566666666665L 758.547721862793 42.91566666666665L 758.547721862793 42.91566666666665L 758.547721862793 257.494L 758.547721862793 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 742.7236930847168 257.494L 742.7236930847168 42.91566666666665L 758.547721862793 42.91566666666665L 758.547721862793 42.91566666666665L 758.547721862793 257.494L 758.547721862793 257.494z"
                                                              pathFrom="M 742.7236930847168 257.494L 742.7236930847168 257.494L 758.547721862793 257.494L 758.547721862793 257.494L 758.547721862793 257.494L 742.7236930847168 257.494"
                                                              cy="42.91566666666665" cx="879.0505516052247" j="5"
                                                              val="10" barHeight="214.57833333333338"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1677"
                                                              d="M 881.5505516052247 257.494L 881.5505516052247 193.12050000000002L 897.3745803833008 193.12050000000002L 897.3745803833008 193.12050000000002L 897.3745803833008 257.494L 897.3745803833008 257.494z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 881.5505516052247 257.494L 881.5505516052247 193.12050000000002L 897.3745803833008 193.12050000000002L 897.3745803833008 193.12050000000002L 897.3745803833008 257.494L 897.3745803833008 257.494z"
                                                              pathFrom="M 881.5505516052247 257.494L 881.5505516052247 257.494L 897.3745803833008 257.494L 897.3745803833008 257.494L 897.3745803833008 257.494L 881.5505516052247 257.494"
                                                              cy="193.12050000000002" cx="1017.8774101257325" j="6"
                                                              val="3" barHeight="64.3735"
                                                              barWidth="20.824028778076173"></path>
                                                    </g>
                                                    <g id="SvgjsG1678" class="apexcharts-series" rel="2"
                                                       seriesName="Amplex" data:realIndex="1">
                                                        <path id="SvgjsPath1680"
                                                              d="M 69.4134292602539 257.494L 69.4134292602539 128.747L 85.23745803833008 128.747L 85.23745803833008 128.747L 85.23745803833008 257.494L 85.23745803833008 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 69.4134292602539 257.494L 69.4134292602539 128.747L 85.23745803833008 128.747L 85.23745803833008 128.747L 85.23745803833008 257.494L 85.23745803833008 257.494z"
                                                              pathFrom="M 69.4134292602539 257.494L 69.4134292602539 257.494L 85.23745803833008 257.494L 85.23745803833008 257.494L 85.23745803833008 257.494L 69.4134292602539 257.494"
                                                              cy="128.747" cx="205.74028778076172" j="0" val="6"
                                                              barHeight="128.747" barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1681"
                                                              d="M 208.24028778076172 257.494L 208.24028778076172 193.12050000000002L 224.0643165588379 193.12050000000002L 224.0643165588379 193.12050000000002L 224.0643165588379 257.494L 224.0643165588379 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 208.24028778076172 257.494L 208.24028778076172 193.12050000000002L 224.0643165588379 193.12050000000002L 224.0643165588379 193.12050000000002L 224.0643165588379 257.494L 224.0643165588379 257.494z"
                                                              pathFrom="M 208.24028778076172 257.494L 208.24028778076172 257.494L 224.0643165588379 257.494L 224.0643165588379 257.494L 224.0643165588379 257.494L 208.24028778076172 257.494"
                                                              cy="193.12050000000002" cx="344.56714630126953" j="1"
                                                              val="3" barHeight="64.3735"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1682"
                                                              d="M 347.06714630126953 257.494L 347.06714630126953 64.3735L 362.8911750793457 64.3735L 362.8911750793457 64.3735L 362.8911750793457 257.494L 362.8911750793457 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 347.06714630126953 257.494L 347.06714630126953 64.3735L 362.8911750793457 64.3735L 362.8911750793457 64.3735L 362.8911750793457 257.494L 362.8911750793457 257.494z"
                                                              pathFrom="M 347.06714630126953 257.494L 347.06714630126953 257.494L 362.8911750793457 257.494L 362.8911750793457 257.494L 362.8911750793457 257.494L 347.06714630126953 257.494"
                                                              cy="64.3735" cx="483.39400482177734" j="2" val="9"
                                                              barHeight="193.12050000000002"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1683"
                                                              d="M 485.89400482177734 257.494L 485.89400482177734 150.20483333333334L 501.7180335998535 150.20483333333334L 501.7180335998535 150.20483333333334L 501.7180335998535 257.494L 501.7180335998535 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 485.89400482177734 257.494L 485.89400482177734 150.20483333333334L 501.7180335998535 150.20483333333334L 501.7180335998535 150.20483333333334L 501.7180335998535 257.494L 501.7180335998535 257.494z"
                                                              pathFrom="M 485.89400482177734 257.494L 485.89400482177734 257.494L 501.7180335998535 257.494L 501.7180335998535 257.494L 501.7180335998535 257.494L 485.89400482177734 257.494"
                                                              cy="150.20483333333334" cx="622.2208633422852" j="3"
                                                              val="5" barHeight="107.28916666666669"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1684"
                                                              d="M 624.7208633422852 257.494L 624.7208633422852 171.66266666666667L 640.5448921203613 171.66266666666667L 640.5448921203613 171.66266666666667L 640.5448921203613 257.494L 640.5448921203613 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 624.7208633422852 257.494L 624.7208633422852 171.66266666666667L 640.5448921203613 171.66266666666667L 640.5448921203613 171.66266666666667L 640.5448921203613 257.494L 640.5448921203613 257.494z"
                                                              pathFrom="M 624.7208633422852 257.494L 624.7208633422852 257.494L 640.5448921203613 257.494L 640.5448921203613 257.494L 640.5448921203613 257.494L 624.7208633422852 257.494"
                                                              cy="171.66266666666667" cx="761.047721862793" j="4"
                                                              val="4" barHeight="85.83133333333335"
                                                              barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1685"
                                                              d="M 763.547721862793 257.494L 763.547721862793 128.747L 779.3717506408691 128.747L 779.3717506408691 128.747L 779.3717506408691 257.494L 779.3717506408691 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 763.547721862793 257.494L 763.547721862793 128.747L 779.3717506408691 128.747L 779.3717506408691 128.747L 779.3717506408691 257.494L 779.3717506408691 257.494z"
                                                              pathFrom="M 763.547721862793 257.494L 763.547721862793 257.494L 779.3717506408691 257.494L 779.3717506408691 257.494L 779.3717506408691 257.494L 763.547721862793 257.494"
                                                              cy="128.747" cx="899.8745803833008" j="5" val="6"
                                                              barHeight="128.747" barWidth="20.824028778076173"></path>
                                                        <path id="SvgjsPath1686"
                                                              d="M 902.3745803833008 257.494L 902.3745803833008 171.66266666666667L 918.1986091613769 171.66266666666667L 918.1986091613769 171.66266666666667L 918.1986091613769 257.494L 918.1986091613769 257.494z"
                                                              fill="rgba(33,193,214,1)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                              clip-path="url(#gridRectMask0gf6f3mzl)"
                                                              pathTo="M 902.3745803833008 257.494L 902.3745803833008 171.66266666666667L 918.1986091613769 171.66266666666667L 918.1986091613769 171.66266666666667L 918.1986091613769 257.494L 918.1986091613769 257.494z"
                                                              pathFrom="M 902.3745803833008 257.494L 902.3745803833008 257.494L 918.1986091613769 257.494L 918.1986091613769 257.494L 918.1986091613769 257.494L 902.3745803833008 257.494"
                                                              cy="171.66266666666667" cx="1038.7014389038086" j="6"
                                                              val="4" barHeight="85.83133333333335"
                                                              barWidth="20.824028778076173"></path>
                                                        <g id="SvgjsG1679" class="apexcharts-datalabels"
                                                           data:realIndex="1"></g>
                                                    </g>
                                                    <g id="SvgjsG1670" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1732" x1="0" y1="0" x2="971.7880096435547" y2="0"
                                                      stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1733" x1="0" y1="0" x2="971.7880096435547" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1734" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1735" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1736" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1710" class="apexcharts-yaxis" rel="0"
                                               transform="translate(7.2119903564453125, 0)">
                                                <g id="SvgjsG1711" class="apexcharts-yaxis-texts-g">
                                                    <text id="SvgjsText1712" font-family="Poppins,sans-serif" x="20"
                                                          y="31.4" text-anchor="end" dominant-baseline="auto"
                                                          font-size="11px" font-weight="400" fill="#a1aab2"
                                                          class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Poppins, sans-serif;">
                                                        <tspan id="SvgjsTspan1713">12</tspan>
                                                    </text>
                                                    <text id="SvgjsText1714" font-family="Poppins,sans-serif" x="20"
                                                          y="95.77350000000001" text-anchor="end"
                                                          dominant-baseline="auto" font-size="11px" font-weight="400"
                                                          fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Poppins, sans-serif;">
                                                        <tspan id="SvgjsTspan1715">9</tspan>
                                                    </text>
                                                    <text id="SvgjsText1716" font-family="Poppins,sans-serif" x="20"
                                                          y="160.14700000000002" text-anchor="end"
                                                          dominant-baseline="auto" font-size="11px" font-weight="400"
                                                          fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Poppins, sans-serif;">
                                                        <tspan id="SvgjsTspan1717">6</tspan>
                                                    </text>
                                                    <text id="SvgjsText1718" font-family="Poppins,sans-serif" x="20"
                                                          y="224.52050000000003" text-anchor="end"
                                                          dominant-baseline="auto" font-size="11px" font-weight="400"
                                                          fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Poppins, sans-serif;">
                                                        <tspan id="SvgjsTspan1719">3</tspan>
                                                    </text>
                                                    <text id="SvgjsText1720" font-family="Poppins,sans-serif" x="20"
                                                          y="288.894" text-anchor="end" dominant-baseline="auto"
                                                          font-size="11px" font-weight="400" fill="#a1aab2"
                                                          class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Poppins, sans-serif;">
                                                        <tspan id="SvgjsTspan1721">0</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1658" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Poppins, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(30, 136, 229);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Poppins, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(33, 193, 214);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Poppins, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 1050px; height: 361px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body" style="position: relative;">
                        <h3 class="card-title">Our Visitors </h3>
                        <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                        <div id="our-visitors" class="mt-4" style="min-height: 254.8px;">
                            <div id="apexchartssuuusfxb"
                                 class="apexcharts-canvas apexchartssuuusfxb apexcharts-theme-light"
                                 style="width: 474px; height: 254.8px;">
                                <svg id="SvgjsSvg1871" width="474" height="254.79999999999998"
                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                     class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <g id="SvgjsG1873" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(125, 0)">
                                        <defs id="SvgjsDefs1872">
                                            <clipPath id="gridRectMasksuuusfxb">
                                                <rect id="SvgjsRect1875" width="230" height="248" x="-2" y="0" rx="0"
                                                      ry="0" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMasksuuusfxb">
                                                <rect id="SvgjsRect1876" width="230" height="252" x="-2" y="-2" rx="0"
                                                      ry="0" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1877" class="apexcharts-pie">
                                            <g id="SvgjsG1878" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1879" r="97.08975609756098" cx="113" cy="124"
                                                        fill="transparent"></circle>
                                                <g id="SvgjsG1880" class="apexcharts-slices">
                                                    <g id="SvgjsG1881" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Mobile" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1882"
                                                              d="M 113.00000000000001 7.024390243902431 A 116.97560975609757 116.97560975609757 0 0 1 190.56917729080135 211.55750117630734 L 177.3824171513651 196.67272597633507 A 97.08975609756098 97.08975609756098 0 0 0 113 26.91024390243902 L 113.00000000000001 7.024390243902431 z"
                                                              fill="rgba(30,136,229,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                              index="0" j="0" data:angle="138.46153846153845"
                                                              data:startAngle="0" data:strokeWidth="0" data:value="50"
                                                              data:pathOrig="M 113.00000000000001 7.024390243902431 A 116.97560975609757 116.97560975609757 0 0 1 190.56917729080135 211.55750117630734 L 177.3824171513651 196.67272597633507 A 97.08975609756098 97.08975609756098 0 0 0 113 26.91024390243902 L 113.00000000000001 7.024390243902431 z"></path>
                                                    </g>
                                                    <g id="SvgjsG1883" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Tablet" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1884"
                                                              d="M 190.56917729080135 211.55750117630734 A 116.97560975609757 116.97560975609757 0 0 1 3.625904880018311 165.48012288429274 L 22.219501050415204 158.42850199396298 A 97.08975609756098 97.08975609756098 0 0 0 177.3824171513651 196.67272597633507 L 190.56917729080135 211.55750117630734 z"
                                                              fill="rgba(38,198,218,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                              index="0" j="1" data:angle="110.76923076923077"
                                                              data:startAngle="138.46153846153845" data:strokeWidth="0"
                                                              data:value="40"
                                                              data:pathOrig="M 190.56917729080135 211.55750117630734 A 116.97560975609757 116.97560975609757 0 0 1 3.625904880018311 165.48012288429274 L 22.219501050415204 158.42850199396298 A 97.08975609756098 97.08975609756098 0 0 0 177.3824171513651 196.67272597633507 L 190.56917729080135 211.55750117630734 z"></path>
                                                    </g>
                                                    <g id="SvgjsG1885" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Other" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1886"
                                                              d="M 3.625904880018311 165.48012288429274 A 116.97560975609757 116.97560975609757 0 0 1 58.638723582392274 20.423241487005043 L 67.88014057338559 38.031290434214185 A 97.08975609756098 97.08975609756098 0 0 0 22.219501050415204 158.42850199396298 L 3.625904880018311 165.48012288429274 z"
                                                              fill="rgba(236,239,241,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                              index="0" j="2" data:angle="83.0769230769231"
                                                              data:startAngle="249.23076923076923" data:strokeWidth="0"
                                                              data:value="30"
                                                              data:pathOrig="M 3.625904880018311 165.48012288429274 A 116.97560975609757 116.97560975609757 0 0 1 58.638723582392274 20.423241487005043 L 67.88014057338559 38.031290434214185 A 97.08975609756098 97.08975609756098 0 0 0 22.219501050415204 158.42850199396298 L 3.625904880018311 165.48012288429274 z"></path>
                                                    </g>
                                                    <g id="SvgjsG1887" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Desktop" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath1888"
                                                              d="M 58.638723582392274 20.423241487005043 A 116.97560975609757 116.97560975609757 0 0 1 112.97958390475591 7.024392025542838 L 112.9830546409474 26.910245381200568 A 97.08975609756098 97.08975609756098 0 0 0 67.88014057338559 38.031290434214185 L 58.638723582392274 20.423241487005043 z"
                                                              fill="rgba(116,90,242,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                              index="0" j="3" data:angle="27.69230769230768"
                                                              data:startAngle="332.3076923076923" data:strokeWidth="0"
                                                              data:value="10"
                                                              data:pathOrig="M 58.638723582392274 20.423241487005043 A 116.97560975609757 116.97560975609757 0 0 1 112.97958390475591 7.024392025542838 L 112.9830546409474 26.910245381200568 A 97.08975609756098 97.08975609756098 0 0 0 67.88014057338559 38.031290434214185 L 58.638723582392274 20.423241487005043 z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1889" class="apexcharts-datalabels-group"
                                               transform="translate(0, 0) scale(1)">
                                                <text id="SvgjsText1890" font-family="Poppins,sans-serif" x="113"
                                                      y="131" text-anchor="middle" dominant-baseline="auto"
                                                      font-size="13px" font-weight="400" fill="#a1aab2"
                                                      class="apexcharts-text apexcharts-datalabel-label"
                                                      style="font-family: Poppins, sans-serif;">Our Visitor
                                                </text>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1891" x1="0" y1="0" x2="226" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1892" x1="0" y1="0" x2="226" y2="0" stroke-dasharray="0"
                                              stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1874" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                       style="background-color: rgb(30, 136, 229);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Poppins, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                       style="background-color: rgb(38, 198, 218);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Poppins, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                       style="background-color: rgb(236, 239, 241);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Poppins, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                       style="background-color: rgb(116, 90, 242);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Poppins, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 515px; height: 375px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="card-body text-center border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-2">
                                <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Mobile</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Desktop</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>Tablet</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card blog-widget w-100">
                    <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/background/img5.jpg" alt="img"
                                                     class="img-fluid blog-img-height w-100"></div>
                        <h3>Business development new rules for 2021</h3>
                        <label class="badge badge-pill bg-light-success text-success font-weight-medium py-1 px-2">Technology</label>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="read"><a href="javascript:void(0)" class="link font-weight-medium">Read
                                    More</a></div>
                            <div class="ms-auto">
                                <a href="javascript:void(0)" class="link me-2" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="Like" aria-label="Like"><i class="mdi mdi-heart-outline"></i></a>
                                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="Share" aria-label="Share"><i
                                        class="mdi mdi-share-variant"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Newsletter Campaign</h3>
                                <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                            </div>
                            <div class="ms-auto align-self-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-success"><i class="fa fa-circle font-10 me-2 "></i>Open
                                            Rate</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 me-2"></i>Recurring
                                            Payments</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="newsletter-campaign" style="min-height: 285px;">
                            <div id="apexchartsyx0gg4w6"
                                 class="apexcharts-canvas apexchartsyx0gg4w6 apexcharts-theme-light apexcharts-zoomable"
                                 style="width: 1019px; height: 270px;">
                                <svg id="SvgjsSvg1737" width="1019" height="270" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <g id="SvgjsG1739" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(40.43499755859375, 30)">
                                        <defs id="SvgjsDefs1738">
                                            <clipPath id="gridRectMaskyx0gg4w6">
                                                <rect id="SvgjsRect1745" width="974.5650024414062" height="199.494"
                                                      x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskyx0gg4w6">
                                                <rect id="SvgjsRect1746" width="984.5650024414062" height="213.494"
                                                      x="-8" y="-8" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1766" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1767" stop-opacity="0.5"
                                                      stop-color="rgba(33,193,214,0.5)" offset="0"></stop>
                                                <stop id="SvgjsStop1768" stop-opacity="0.5"
                                                      stop-color="rgba(255,255,255,0.5)" offset="0.9"></stop>
                                                <stop id="SvgjsStop1769" stop-opacity="0.5"
                                                      stop-color="rgba(255,255,255,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1790" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1791" stop-opacity="0.5"
                                                      stop-color="rgba(30,136,229,0.5)" offset="0"></stop>
                                                <stop id="SvgjsStop1792" stop-opacity="0.5"
                                                      stop-color="rgba(255,255,255,0.5)" offset="0.9"></stop>
                                                <stop id="SvgjsStop1793" stop-opacity="0.5"
                                                      stop-color="rgba(255,255,255,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1744" x1="0" y1="0" x2="0" y2="197.494" stroke="#b6b6b6"
                                              stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                              height="197.494" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                              stroke-width="1"></line>
                                        <g id="SvgjsG1796" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1797" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)">
                                                <text id="SvgjsText1799" font-family="Poppins,sans-serif" x="0"
                                                      y="226.494" text-anchor="middle" dominant-baseline="auto"
                                                      font-size="12px" font-weight="400" fill="#a1aab2"
                                                      class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1800">1</tspan>
                                                    <title>1</title></text>
                                                <text id="SvgjsText1802" font-family="Poppins,sans-serif"
                                                      x="138.36642892020092" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1803">2</tspan>
                                                    <title>2</title></text>
                                                <text id="SvgjsText1805" font-family="Poppins,sans-serif"
                                                      x="276.73285784040183" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1806">3</tspan>
                                                    <title>3</title></text>
                                                <text id="SvgjsText1808" font-family="Poppins,sans-serif"
                                                      x="415.0992867606027" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1809">4</tspan>
                                                    <title>4</title></text>
                                                <text id="SvgjsText1811" font-family="Poppins,sans-serif"
                                                      x="553.4657156808036" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1812">5</tspan>
                                                    <title>5</title></text>
                                                <text id="SvgjsText1814" font-family="Poppins,sans-serif"
                                                      x="691.8321446010044" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1815">6</tspan>
                                                    <title>6</title></text>
                                                <text id="SvgjsText1817" font-family="Poppins,sans-serif"
                                                      x="830.1985735212053" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1818">7</tspan>
                                                    <title>7</title></text>
                                                <text id="SvgjsText1820" font-family="Poppins,sans-serif"
                                                      x="968.5650024414061" y="226.494" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Poppins, sans-serif;">
                                                    <tspan id="SvgjsTspan1821">8</tspan>
                                                    <title>8</title></text>
                                            </g>
                                            <line id="SvgjsLine1822" x1="0" y1="198.494" x2="968.5650024414062"
                                                  y2="198.494" stroke="#e0e0e0" stroke-dasharray="0"
                                                  stroke-width="1"></line>
                                        </g>
                                        <g id="SvgjsG1837" class="apexcharts-grid">
                                            <g id="SvgjsG1838" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1856" x1="0" y1="0" x2="968.5650024414062" y2="0"
                                                      stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1857" x1="0" y1="39.4988" x2="968.5650024414062"
                                                      y2="39.4988" stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1858" x1="0" y1="78.9976" x2="968.5650024414062"
                                                      y2="78.9976" stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1859" x1="0" y1="118.49640000000001"
                                                      x2="968.5650024414062" y2="118.49640000000001"
                                                      stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1860" x1="0" y1="157.9952" x2="968.5650024414062"
                                                      y2="157.9952" stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1861" x1="0" y1="197.49400000000003"
                                                      x2="968.5650024414062" y2="197.49400000000003"
                                                      stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1839" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1840" x1="0" y1="0" x2="0" y2="197.494"
                                                      stroke="rgba(0,0,0,.1)" stroke-dasharray="3"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1842" x1="138.3664289202009" y1="0"
                                                      x2="138.3664289202009" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1844" x1="276.7328578404018" y1="0"
                                                      x2="276.7328578404018" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1846" x1="415.0992867606027" y1="0"
                                                      x2="415.0992867606027" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1848" x1="553.4657156808036" y1="0"
                                                      x2="553.4657156808036" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1850" x1="691.8321446010044" y1="0"
                                                      x2="691.8321446010044" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1852" x1="830.1985735212053" y1="0"
                                                      x2="830.1985735212053" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1854" x1="968.5650024414061" y1="0"
                                                      x2="968.5650024414061" y2="197.494" stroke="rgba(0,0,0,.1)"
                                                      stroke-dasharray="3" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1841" x1="0" y1="198.494" x2="0" y2="204.494"
                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1843" x1="138.3664289202009" y1="198.494"
                                                  x2="138.3664289202009" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1845" x1="276.7328578404018" y1="198.494"
                                                  x2="276.7328578404018" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1847" x1="415.0992867606027" y1="198.494"
                                                  x2="415.0992867606027" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1849" x1="553.4657156808036" y1="198.494"
                                                  x2="553.4657156808036" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1851" x1="691.8321446010044" y1="198.494"
                                                  x2="691.8321446010044" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1853" x1="830.1985735212053" y1="198.494"
                                                  x2="830.1985735212053" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1855" x1="968.5650024414061" y1="198.494"
                                                  x2="968.5650024414061" y2="204.494" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1863" x1="0" y1="197.494" x2="968.5650024414062"
                                                  y2="197.494" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1862" x1="0" y1="1" x2="0" y2="197.494"
                                                  stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1747" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1772" class="apexcharts-series"
                                               seriesName="RecurringxxPaymentsx" data:longestSeries="true" rel="2"
                                               data:realIndex="1">
                                                <path id="SvgjsPath1794"
                                                      d="M 0 197.494L 0 197.494C 48.42825012207031 197.494 89.93817879813058 177.7446 138.3664289202009 177.7446C 186.79467904227118 177.7446 228.30460771833145 190.91086666666666 276.7328578404018 190.91086666666666C 325.1611079624721 190.91086666666666 366.6710366385323 184.32773333333333 415.09928676060264 184.32773333333333C 463.52753688267296 184.32773333333333 505.03746555873323 144.82893333333334 553.4657156808036 144.82893333333334C 601.8939658028738 144.82893333333334 643.4038944789341 190.91086666666666 691.8321446010044 190.91086666666666C 740.2603947230747 190.91086666666666 781.770323399135 164.57833333333332 830.1985735212053 164.57833333333332C 878.6268236432757 164.57833333333332 920.1367523193359 190.91086666666666 968.5650024414062 190.91086666666666C 968.5650024414062 190.91086666666666 968.5650024414062 190.91086666666666 968.5650024414062 197.494M 968.5650024414062 190.91086666666666z"
                                                      fill="url(#SvgjsLinearGradient1790)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="1"
                                                      clip-path="url(#gridRectMaskyx0gg4w6)"
                                                      pathTo="M 0 197.494L 0 197.494C 48.42825012207031 197.494 89.93817879813058 177.7446 138.3664289202009 177.7446C 186.79467904227118 177.7446 228.30460771833145 190.91086666666666 276.7328578404018 190.91086666666666C 325.1611079624721 190.91086666666666 366.6710366385323 184.32773333333333 415.09928676060264 184.32773333333333C 463.52753688267296 184.32773333333333 505.03746555873323 144.82893333333334 553.4657156808036 144.82893333333334C 601.8939658028738 144.82893333333334 643.4038944789341 190.91086666666666 691.8321446010044 190.91086666666666C 740.2603947230747 190.91086666666666 781.770323399135 164.57833333333332 830.1985735212053 164.57833333333332C 878.6268236432757 164.57833333333332 920.1367523193359 190.91086666666666 968.5650024414062 190.91086666666666C 968.5650024414062 190.91086666666666 968.5650024414062 190.91086666666666 968.5650024414062 197.494M 968.5650024414062 190.91086666666666z"
                                                      pathFrom="M -1 197.494L -1 197.494L 138.3664289202009 197.494L 276.7328578404018 197.494L 415.09928676060264 197.494L 553.4657156808036 197.494L 691.8321446010044 197.494L 830.1985735212053 197.494L 968.5650024414062 197.494"></path>
                                                <path id="SvgjsPath1795"
                                                      d="M 0 197.494C 48.42825012207031 197.494 89.93817879813058 177.7446 138.3664289202009 177.7446C 186.79467904227118 177.7446 228.30460771833145 190.91086666666666 276.7328578404018 190.91086666666666C 325.1611079624721 190.91086666666666 366.6710366385323 184.32773333333333 415.09928676060264 184.32773333333333C 463.52753688267296 184.32773333333333 505.03746555873323 144.82893333333334 553.4657156808036 144.82893333333334C 601.8939658028738 144.82893333333334 643.4038944789341 190.91086666666666 691.8321446010044 190.91086666666666C 740.2603947230747 190.91086666666666 781.770323399135 164.57833333333332 830.1985735212053 164.57833333333332C 878.6268236432757 164.57833333333332 920.1367523193359 190.91086666666666 968.5650024414062 190.91086666666666"
                                                      fill="none" fill-opacity="1" stroke="#1e88e5" stroke-opacity="1"
                                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                      class="apexcharts-area" index="1"
                                                      clip-path="url(#gridRectMaskyx0gg4w6)"
                                                      pathTo="M 0 197.494C 48.42825012207031 197.494 89.93817879813058 177.7446 138.3664289202009 177.7446C 186.79467904227118 177.7446 228.30460771833145 190.91086666666666 276.7328578404018 190.91086666666666C 325.1611079624721 190.91086666666666 366.6710366385323 184.32773333333333 415.09928676060264 184.32773333333333C 463.52753688267296 184.32773333333333 505.03746555873323 144.82893333333334 553.4657156808036 144.82893333333334C 601.8939658028738 144.82893333333334 643.4038944789341 190.91086666666666 691.8321446010044 190.91086666666666C 740.2603947230747 190.91086666666666 781.770323399135 164.57833333333332 830.1985735212053 164.57833333333332C 878.6268236432757 164.57833333333332 920.1367523193359 190.91086666666666 968.5650024414062 190.91086666666666"
                                                      pathFrom="M -1 197.494L -1 197.494L 138.3664289202009 197.494L 276.7328578404018 197.494L 415.09928676060264 197.494L 553.4657156808036 197.494L 691.8321446010044 197.494L 830.1985735212053 197.494L 968.5650024414062 197.494"></path>
                                                <g id="SvgjsG1773" class="apexcharts-series-markers-wrap"
                                                   data:realIndex="1">
                                                    <g id="SvgjsG1775" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1776" r="3" cx="0" cy="197.494"
                                                                class="apexcharts-marker no-pointer-events w2vv1lq1rk"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                                index="1" default-marker-size="3"></circle>
                                                        <circle id="SvgjsCircle1777" r="3" cx="138.3664289202009"
                                                                cy="177.7446"
                                                                class="apexcharts-marker no-pointer-events w8xv7jy9q"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1778" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1779" r="3" cx="276.7328578404018"
                                                                cy="190.91086666666666"
                                                                class="apexcharts-marker no-pointer-events w0zu52l0b"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1780" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1781" r="3" cx="415.09928676060264"
                                                                cy="184.32773333333333"
                                                                class="apexcharts-marker no-pointer-events wfjsbq5khi"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1782" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1783" r="3" cx="553.4657156808036"
                                                                cy="144.82893333333334"
                                                                class="apexcharts-marker no-pointer-events wmgwgkol2"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1784" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1785" r="3" cx="691.8321446010044"
                                                                cy="190.91086666666666"
                                                                class="apexcharts-marker no-pointer-events w1bkdurmg"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1786" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1787" r="3" cx="830.1985735212053"
                                                                cy="164.57833333333332"
                                                                class="apexcharts-marker no-pointer-events wz8mb5dwi"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1788" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1789" r="3" cx="968.5650024414062"
                                                                cy="190.91086666666666"
                                                                class="apexcharts-marker no-pointer-events wufviss3k"
                                                                stroke="transparent" fill="#1e88e5" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                                index="1" default-marker-size="3"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1748" class="apexcharts-series" seriesName="OpenxRatex"
                                               data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1770"
                                                      d="M 0 197.494L 0 197.494C 48.42825012207031 197.494 89.93817879813058 164.57833333333332 138.3664289202009 164.57833333333332C 186.79467904227118 164.57833333333332 228.30460771833145 157.9952 276.7328578404018 157.9952C 325.1611079624721 157.9952 366.6710366385323 144.82893333333334 415.09928676060264 144.82893333333334C 463.52753688267296 144.82893333333334 505.03746555873323 32.91566666666668 553.4657156808036 32.91566666666668C 601.8939658028738 32.91566666666668 643.4038944789341 138.2458 691.8321446010044 138.2458C 740.2603947230747 138.2458 781.770323399135 144.82893333333334 830.1985735212053 144.82893333333334C 878.6268236432757 144.82893333333334 920.1367523193359 39.49879999999999 968.5650024414062 39.49879999999999C 968.5650024414062 39.49879999999999 968.5650024414062 39.49879999999999 968.5650024414062 197.494M 968.5650024414062 39.49879999999999z"
                                                      fill="url(#SvgjsLinearGradient1766)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskyx0gg4w6)"
                                                      pathTo="M 0 197.494L 0 197.494C 48.42825012207031 197.494 89.93817879813058 164.57833333333332 138.3664289202009 164.57833333333332C 186.79467904227118 164.57833333333332 228.30460771833145 157.9952 276.7328578404018 157.9952C 325.1611079624721 157.9952 366.6710366385323 144.82893333333334 415.09928676060264 144.82893333333334C 463.52753688267296 144.82893333333334 505.03746555873323 32.91566666666668 553.4657156808036 32.91566666666668C 601.8939658028738 32.91566666666668 643.4038944789341 138.2458 691.8321446010044 138.2458C 740.2603947230747 138.2458 781.770323399135 144.82893333333334 830.1985735212053 144.82893333333334C 878.6268236432757 144.82893333333334 920.1367523193359 39.49879999999999 968.5650024414062 39.49879999999999C 968.5650024414062 39.49879999999999 968.5650024414062 39.49879999999999 968.5650024414062 197.494M 968.5650024414062 39.49879999999999z"
                                                      pathFrom="M -1 197.494L -1 197.494L 138.3664289202009 197.494L 276.7328578404018 197.494L 415.09928676060264 197.494L 553.4657156808036 197.494L 691.8321446010044 197.494L 830.1985735212053 197.494L 968.5650024414062 197.494"></path>
                                                <path id="SvgjsPath1771"
                                                      d="M 0 197.494C 48.42825012207031 197.494 89.93817879813058 164.57833333333332 138.3664289202009 164.57833333333332C 186.79467904227118 164.57833333333332 228.30460771833145 157.9952 276.7328578404018 157.9952C 325.1611079624721 157.9952 366.6710366385323 144.82893333333334 415.09928676060264 144.82893333333334C 463.52753688267296 144.82893333333334 505.03746555873323 32.91566666666668 553.4657156808036 32.91566666666668C 601.8939658028738 32.91566666666668 643.4038944789341 138.2458 691.8321446010044 138.2458C 740.2603947230747 138.2458 781.770323399135 144.82893333333334 830.1985735212053 144.82893333333334C 878.6268236432757 144.82893333333334 920.1367523193359 39.49879999999999 968.5650024414062 39.49879999999999"
                                                      fill="none" fill-opacity="1" stroke="#21c1d6" stroke-opacity="1"
                                                      stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                      class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMaskyx0gg4w6)"
                                                      pathTo="M 0 197.494C 48.42825012207031 197.494 89.93817879813058 164.57833333333332 138.3664289202009 164.57833333333332C 186.79467904227118 164.57833333333332 228.30460771833145 157.9952 276.7328578404018 157.9952C 325.1611079624721 157.9952 366.6710366385323 144.82893333333334 415.09928676060264 144.82893333333334C 463.52753688267296 144.82893333333334 505.03746555873323 32.91566666666668 553.4657156808036 32.91566666666668C 601.8939658028738 32.91566666666668 643.4038944789341 138.2458 691.8321446010044 138.2458C 740.2603947230747 138.2458 781.770323399135 144.82893333333334 830.1985735212053 144.82893333333334C 878.6268236432757 144.82893333333334 920.1367523193359 39.49879999999999 968.5650024414062 39.49879999999999"
                                                      pathFrom="M -1 197.494L -1 197.494L 138.3664289202009 197.494L 276.7328578404018 197.494L 415.09928676060264 197.494L 553.4657156808036 197.494L 691.8321446010044 197.494L 830.1985735212053 197.494L 968.5650024414062 197.494"></path>
                                                <g id="SvgjsG1749" class="apexcharts-series-markers-wrap"
                                                   data:realIndex="0">
                                                    <g id="SvgjsG1751" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1752" r="3" cx="0" cy="197.494"
                                                                class="apexcharts-marker no-pointer-events wh9charfd"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                                index="0" default-marker-size="3"></circle>
                                                        <circle id="SvgjsCircle1753" r="3" cx="138.3664289202009"
                                                                cy="164.57833333333332"
                                                                class="apexcharts-marker no-pointer-events wa1hhz8km"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1754" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1755" r="3" cx="276.7328578404018"
                                                                cy="157.9952"
                                                                class="apexcharts-marker no-pointer-events wgaq9a5jn"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1756" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1757" r="3" cx="415.09928676060264"
                                                                cy="144.82893333333334"
                                                                class="apexcharts-marker no-pointer-events w0tgw3qx4"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1758" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1759" r="3" cx="553.4657156808036"
                                                                cy="32.91566666666668"
                                                                class="apexcharts-marker no-pointer-events whm5eyr7gf"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1760" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1761" r="3" cx="691.8321446010044"
                                                                cy="138.2458"
                                                                class="apexcharts-marker no-pointer-events wkayt7lpk"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1762" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1763" r="3" cx="830.1985735212053"
                                                                cy="144.82893333333334"
                                                                class="apexcharts-marker no-pointer-events w1k7bxo4i"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                    <g id="SvgjsG1764" class="apexcharts-series-markers"
                                                       clip-path="url(#gridRectMarkerMaskyx0gg4w6)">
                                                        <circle id="SvgjsCircle1765" r="3" cx="968.5650024414062"
                                                                cy="39.49879999999999"
                                                                class="apexcharts-marker no-pointer-events w4gqk4h5ml"
                                                                stroke="transparent" fill="#21c1d6" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                                index="0" default-marker-size="3"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1750" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG1774" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1864" x1="0" y1="0" x2="968.5650024414062" y2="0"
                                              stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1865" x1="0" y1="0" x2="968.5650024414062" y2="0"
                                              stroke-dasharray="0" stroke-width="0"
                                              class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1866" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1867" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1868" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1869" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                              fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1870" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                              fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1743" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                          stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1823" class="apexcharts-yaxis" rel="0"
                                       transform="translate(10.43499755859375, 0)">
                                        <g id="SvgjsG1824" class="apexcharts-yaxis-texts-g">
                                            <text id="SvgjsText1825" font-family="Poppins,sans-serif" x="20" y="31.5"
                                                  text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                  font-weight="400" fill="#a1aab2"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1826">30</tspan>
                                            </text>
                                            <text id="SvgjsText1827" font-family="Poppins,sans-serif" x="20" y="70.9988"
                                                  text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                  font-weight="400" fill="#a1aab2"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1828">24</tspan>
                                            </text>
                                            <text id="SvgjsText1829" font-family="Poppins,sans-serif" x="20"
                                                  y="110.4976" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#a1aab2"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1830">18</tspan>
                                            </text>
                                            <text id="SvgjsText1831" font-family="Poppins,sans-serif" x="20"
                                                  y="149.9964" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#a1aab2"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1832">12</tspan>
                                            </text>
                                            <text id="SvgjsText1833" font-family="Poppins,sans-serif" x="20"
                                                  y="189.4952" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#a1aab2"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1834">6</tspan>
                                            </text>
                                            <text id="SvgjsText1835" font-family="Poppins,sans-serif" x="20"
                                                  y="228.99400000000003" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#a1aab2"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1836">0</tspan>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1740" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-title"
                                         style="font-family: Poppins, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                       style="background-color: rgb(33, 193, 214);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Poppins, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                                                                       style="background-color: rgb(30, 136, 229);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Poppins, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark">
                                    <div class="apexcharts-xaxistooltip-text"
                                         style="font-family: Poppins, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">5098</h1><small>Total Sent</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">4156</h1><small>Mail Open Rate</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">1369</h1><small>Click Rate</small>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1060px; height: 462px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card bg-primary w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-3 align-self-center">
                                <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                            </div>
                            <div>
                                <h3 class="card-title text-white">Bandwidth usage</h3>
                                <h6 class="card-subtitle text-white op-5">March 2021</h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4 col-xl-7 align-self-center">
                                <h2 class="fw-light text-white text-nowrap">50 GB</h2>
                            </div>
                            <div class="col-8 col-xl-5 pb-3 pt-2 align-self-center" style="position: relative;">
                                <div id="bandwidth-usage" style="min-height: 70px;">
                                    <div id="apexchartsckxlm37b"
                                         class="apexcharts-canvas apexchartsckxlm37b apexcharts-theme-light"
                                         style="width: 180px; height: 70px;">
                                        <svg id="SvgjsSvg1894" width="180" height="70"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG1896" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1895">
                                                    <clipPath id="gridRectMaskckxlm37b">
                                                        <rect id="SvgjsRect1901" width="188" height="74" x="-4" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskckxlm37b">
                                                        <rect id="SvgjsRect1902" width="184" height="74" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine1900" x1="0" y1="0" x2="0" y2="70" stroke="#b6b6b6"
                                                      stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                      width="1" height="70" fill="#b1b9c4" filter="none"
                                                      fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1908" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1909" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1911" class="apexcharts-grid">
                                                    <g id="SvgjsG1912" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine1914" x1="0" y1="0" x2="180" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1915" x1="0" y1="17.5" x2="180" y2="17.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1916" x1="0" y1="35" x2="180" y2="35"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1917" x1="0" y1="52.5" x2="180" y2="52.5"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1918" x1="0" y1="70" x2="180" y2="70"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1913" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine1920" x1="0" y1="70" x2="180" y2="70"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1919" x1="0" y1="1" x2="0" y2="70"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1903"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1904" class="apexcharts-series" seriesName=""
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1907"
                                                              d="M 0 48.125C 9 48.125 16.714285714285715 70 25.714285714285715 70C 34.714285714285715 70 42.42857142857143 17.5 51.42857142857143 17.5C 60.42857142857143 17.5 68.14285714285714 65.625 77.14285714285714 65.625C 86.14285714285714 65.625 93.85714285714286 35 102.85714285714286 35C 111.85714285714286 35 119.57142857142856 56.875 128.57142857142856 56.875C 137.57142857142856 56.875 145.28571428571428 17.5 154.28571428571428 17.5C 163.28571428571428 17.5 171 4.375 180 4.375"
                                                              fill="none" fill-opacity="1" stroke="rgba(255,255,255,1)"
                                                              stroke-opacity="1" stroke-linecap="square"
                                                              stroke-width="4" stroke-dasharray="0"
                                                              class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskckxlm37b)"
                                                              pathTo="M 0 48.125C 9 48.125 16.714285714285715 70 25.714285714285715 70C 34.714285714285715 70 42.42857142857143 17.5 51.42857142857143 17.5C 60.42857142857143 17.5 68.14285714285714 65.625 77.14285714285714 65.625C 86.14285714285714 65.625 93.85714285714286 35 102.85714285714286 35C 111.85714285714286 35 119.57142857142856 56.875 128.57142857142856 56.875C 137.57142857142856 56.875 145.28571428571428 17.5 154.28571428571428 17.5C 163.28571428571428 17.5 171 4.375 180 4.375"
                                                              pathFrom="M -1 70L -1 70L 25.714285714285715 70L 51.42857142857143 70L 77.14285714285714 70L 102.85714285714286 70L 128.57142857142856 70L 154.28571428571428 70L 180 70"></path>
                                                        <g id="SvgjsG1905" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <rect id="SvgjsRect1926" width="0" height="0" x="0"
                                                                      y="0" rx="0" ry="0" opacity="1" stroke-width="2"
                                                                      stroke="transparent" stroke-dasharray="0"
                                                                      fill="#ffffff" cx="0" cy="0"
                                                                      class="apexcharts-marker wyp4djznj no-pointer-events"
                                                                      fill-opacity="1" stroke-opacity="0.9"
                                                                      default-marker-size="0"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1906" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1921" x1="0" y1="0" x2="180" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1922" x1="0" y1="0" x2="180" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1923" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1924" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1925" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1899" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG1910" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1897" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 255, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Poppins, sans-serif; font-size: 10px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 211px; height: 95px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card bg-success w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-3 align-self-center">
                                <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                            </div>
                            <div>
                                <h3 class="card-title text-white">Download count</h3>
                                <h6 class="card-subtitle text-white op-5">March 2021</h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4 col-xl-7 align-self-center">
                                <h2 class="fw-light text-white text-nowrap text-truncate">35487</h2>
                            </div>
                            <div class="col-8 col-xl-5 pb-3 pt-2 text-end" style="position: relative;">
                                <div id="download-count" style="height: 65px; min-height: 70px;">
                                    <div id="apexcharts3myv8ule"
                                         class="apexcharts-canvas apexcharts3myv8ule apexcharts-theme-light"
                                         style="width: 180px; height: 70px;">
                                        <svg id="SvgjsSvg1927" width="180" height="70"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <g id="SvgjsG1929" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(15.545454545454547, 0)">
                                                <defs id="SvgjsDefs1928">
                                                    <linearGradient id="SvgjsLinearGradient1932" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop1933" stop-opacity="0.4"
                                                              stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1934" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1935" stop-opacity="0.5"
                                                              stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask3myv8ule">
                                                        <rect id="SvgjsRect1937" width="190" height="76"
                                                              x="-16.545454545454547" y="-3" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke="none" stroke-dasharray="0"
                                                              fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask3myv8ule">
                                                        <rect id="SvgjsRect1938" width="160.9090909090909" height="74"
                                                              x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1936" width="8.558677685950412" height="70" x="0"
                                                      y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke-dasharray="3" fill="url(#SvgjsLinearGradient1932)"
                                                      class="apexcharts-xcrosshairs" y2="70" filter="none"
                                                      fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1954" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1955" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1957" class="apexcharts-grid">
                                                    <g id="SvgjsG1958" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine1960" x1="-11.545454545454547" y1="0"
                                                              x2="168.45454545454544" y2="0" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1961" x1="-11.545454545454547" y1="17.5"
                                                              x2="168.45454545454544" y2="17.5" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1962" x1="-11.545454545454547" y1="35"
                                                              x2="168.45454545454544" y2="35" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1963" x1="-11.545454545454547" y1="52.5"
                                                              x2="168.45454545454544" y2="52.5" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1964" x1="-11.545454545454547" y1="70"
                                                              x2="168.45454545454544" y2="70" stroke="#e0e0e0"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1959" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine1966" x1="0" y1="70" x2="156.9090909090909"
                                                          y2="70" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1965" x1="0" y1="1" x2="0" y2="70"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1939" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1940" class="apexcharts-series" rel="1" seriesName=""
                                                       data:realIndex="0">
                                                        <path id="SvgjsPath1942"
                                                              d="M -4.279338842975206 70L -4.279338842975206 46.66666666666667L -1.7206611570247938 46.66666666666667L -1.7206611570247938 46.66666666666667L -1.7206611570247938 70L -1.7206611570247938 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M -4.279338842975206 70L -4.279338842975206 46.66666666666667L -1.7206611570247938 46.66666666666667L -1.7206611570247938 46.66666666666667L -1.7206611570247938 70L -1.7206611570247938 70z"
                                                              pathFrom="M -4.279338842975206 70L -4.279338842975206 70L -1.7206611570247938 70L -1.7206611570247938 70L -1.7206611570247938 70L -4.279338842975206 70"
                                                              cy="46.66666666666667" cx="1.2793388429752062" j="0"
                                                              val="4" barHeight="23.333333333333332"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1943"
                                                              d="M 9.985123966942147 70L 9.985123966942147 40.83333333333333L 12.543801652892562 40.83333333333333L 12.543801652892562 40.83333333333333L 12.543801652892562 70L 12.543801652892562 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 9.985123966942147 70L 9.985123966942147 40.83333333333333L 12.543801652892562 40.83333333333333L 12.543801652892562 40.83333333333333L 12.543801652892562 70L 12.543801652892562 70z"
                                                              pathFrom="M 9.985123966942147 70L 9.985123966942147 70L 12.543801652892562 70L 12.543801652892562 70L 12.543801652892562 70L 9.985123966942147 70"
                                                              cy="40.83333333333333" cx="15.543801652892562" j="1"
                                                              val="5" barHeight="29.166666666666668"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1944"
                                                              d="M 24.249586776859502 70L 24.249586776859502 58.333333333333336L 26.808264462809916 58.333333333333336L 26.808264462809916 58.333333333333336L 26.808264462809916 70L 26.808264462809916 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 24.249586776859502 70L 24.249586776859502 58.333333333333336L 26.808264462809916 58.333333333333336L 26.808264462809916 58.333333333333336L 26.808264462809916 70L 26.808264462809916 70z"
                                                              pathFrom="M 24.249586776859502 70L 24.249586776859502 70L 26.808264462809916 70L 26.808264462809916 70L 26.808264462809916 70L 24.249586776859502 70"
                                                              cy="58.333333333333336" cx="29.808264462809916" j="2"
                                                              val="2" barHeight="11.666666666666666"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1945"
                                                              d="M 38.514049586776856 70L 38.514049586776856 11.666666666666664L 41.07272727272727 11.666666666666664L 41.07272727272727 11.666666666666664L 41.07272727272727 70L 41.07272727272727 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 38.514049586776856 70L 38.514049586776856 11.666666666666664L 41.07272727272727 11.666666666666664L 41.07272727272727 11.666666666666664L 41.07272727272727 70L 41.07272727272727 70z"
                                                              pathFrom="M 38.514049586776856 70L 38.514049586776856 70L 41.07272727272727 70L 41.07272727272727 70L 41.07272727272727 70L 38.514049586776856 70"
                                                              cy="11.666666666666664" cx="44.07272727272727" j="3"
                                                              val="10" barHeight="58.333333333333336"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1946"
                                                              d="M 52.77851239669421 70L 52.77851239669421 17.5L 55.337190082644625 17.5L 55.337190082644625 17.5L 55.337190082644625 70L 55.337190082644625 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 52.77851239669421 70L 52.77851239669421 17.5L 55.337190082644625 17.5L 55.337190082644625 17.5L 55.337190082644625 70L 55.337190082644625 70z"
                                                              pathFrom="M 52.77851239669421 70L 52.77851239669421 70L 55.337190082644625 70L 55.337190082644625 70L 55.337190082644625 70L 52.77851239669421 70"
                                                              cy="17.5" cx="58.337190082644625" j="4" val="9"
                                                              barHeight="52.5" barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1947"
                                                              d="M 67.04297520661157 70L 67.04297520661157 0L 69.60165289256199 0L 69.60165289256199 0L 69.60165289256199 70L 69.60165289256199 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 67.04297520661157 70L 67.04297520661157 0L 69.60165289256199 0L 69.60165289256199 0L 69.60165289256199 70L 69.60165289256199 70z"
                                                              pathFrom="M 67.04297520661157 70L 67.04297520661157 70L 69.60165289256199 70L 69.60165289256199 70L 69.60165289256199 70L 67.04297520661157 70"
                                                              cy="0" cx="72.60165289256199" j="5" val="12"
                                                              barHeight="70" barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1948"
                                                              d="M 81.30743801652892 70L 81.30743801652892 46.66666666666667L 83.86611570247933 46.66666666666667L 83.86611570247933 46.66666666666667L 83.86611570247933 70L 83.86611570247933 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 81.30743801652892 70L 81.30743801652892 46.66666666666667L 83.86611570247933 46.66666666666667L 83.86611570247933 46.66666666666667L 83.86611570247933 70L 83.86611570247933 70z"
                                                              pathFrom="M 81.30743801652892 70L 81.30743801652892 70L 83.86611570247933 70L 83.86611570247933 70L 83.86611570247933 70L 81.30743801652892 70"
                                                              cy="46.66666666666667" cx="86.86611570247933" j="6"
                                                              val="4" barHeight="23.333333333333332"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1949"
                                                              d="M 95.57190082644628 70L 95.57190082644628 17.5L 98.1305785123967 17.5L 98.1305785123967 17.5L 98.1305785123967 70L 98.1305785123967 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 95.57190082644628 70L 95.57190082644628 17.5L 98.1305785123967 17.5L 98.1305785123967 17.5L 98.1305785123967 70L 98.1305785123967 70z"
                                                              pathFrom="M 95.57190082644628 70L 95.57190082644628 70L 98.1305785123967 70L 98.1305785123967 70L 98.1305785123967 70L 95.57190082644628 70"
                                                              cy="17.5" cx="101.1305785123967" j="7" val="9"
                                                              barHeight="52.5" barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1950"
                                                              d="M 109.83636363636363 70L 109.83636363636363 46.66666666666667L 112.39504132231404 46.66666666666667L 112.39504132231404 46.66666666666667L 112.39504132231404 70L 112.39504132231404 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 109.83636363636363 70L 109.83636363636363 46.66666666666667L 112.39504132231404 46.66666666666667L 112.39504132231404 46.66666666666667L 112.39504132231404 70L 112.39504132231404 70z"
                                                              pathFrom="M 109.83636363636363 70L 109.83636363636363 70L 112.39504132231404 70L 112.39504132231404 70L 112.39504132231404 70L 109.83636363636363 70"
                                                              cy="46.66666666666667" cx="115.39504132231404" j="8"
                                                              val="4" barHeight="23.333333333333332"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1951"
                                                              d="M 124.10082644628098 70L 124.10082644628098 40.83333333333333L 126.65950413223138 40.83333333333333L 126.65950413223138 40.83333333333333L 126.65950413223138 70L 126.65950413223138 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 124.10082644628098 70L 124.10082644628098 40.83333333333333L 126.65950413223138 40.83333333333333L 126.65950413223138 40.83333333333333L 126.65950413223138 70L 126.65950413223138 70z"
                                                              pathFrom="M 124.10082644628098 70L 124.10082644628098 70L 126.65950413223138 70L 126.65950413223138 70L 126.65950413223138 70L 124.10082644628098 70"
                                                              cy="40.83333333333333" cx="129.65950413223138" j="9"
                                                              val="5" barHeight="29.166666666666668"
                                                              barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1952"
                                                              d="M 138.36528925619837 70L 138.36528925619837 52.5L 140.92396694214878 52.5L 140.92396694214878 52.5L 140.92396694214878 70L 140.92396694214878 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 138.36528925619837 70L 138.36528925619837 52.5L 140.92396694214878 52.5L 140.92396694214878 52.5L 140.92396694214878 70L 140.92396694214878 70z"
                                                              pathFrom="M 138.36528925619837 70L 138.36528925619837 70L 140.92396694214878 70L 140.92396694214878 70L 140.92396694214878 70L 138.36528925619837 70"
                                                              cy="52.5" cx="143.92396694214878" j="10" val="3"
                                                              barHeight="17.5" barWidth="8.558677685950412"></path>
                                                        <path id="SvgjsPath1953"
                                                              d="M 152.6297520661157 70L 152.6297520661157 11.666666666666664L 155.18842975206613 11.666666666666664L 155.18842975206613 11.666666666666664L 155.18842975206613 70L 155.18842975206613 70z"
                                                              fill="rgba(255, 255, 255, 0.5)" fill-opacity="1"
                                                              stroke="transparent" stroke-opacity="1"
                                                              stroke-linecap="square" stroke-width="6"
                                                              stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                              clip-path="url(#gridRectMask3myv8ule)"
                                                              pathTo="M 152.6297520661157 70L 152.6297520661157 11.666666666666664L 155.18842975206613 11.666666666666664L 155.18842975206613 11.666666666666664L 155.18842975206613 70L 155.18842975206613 70z"
                                                              pathFrom="M 152.6297520661157 70L 152.6297520661157 70L 155.18842975206613 70L 155.18842975206613 70L 155.18842975206613 70L 152.6297520661157 70"
                                                              cy="11.666666666666664" cx="158.18842975206613" j="11"
                                                              val="10" barHeight="58.333333333333336"
                                                              barWidth="8.558677685950412"></path>
                                                    </g>
                                                    <g id="SvgjsG1941" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1967" x1="-11.545454545454547" y1="0"
                                                      x2="168.45454545454544" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1968" x1="-11.545454545454547" y1="0"
                                                      x2="168.45454545454544" y2="0" stroke-dasharray="0"
                                                      stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1969" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1970" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1971" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1956" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1930" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(255, 255, 255, 0.5);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Poppins, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 211px; height: 95px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <img class="rounded-top" src="../assets/images/background/weatherbg.jpg" alt="Card image cap"
                         style="max-height: 105px;">
                    <div class="card-img-overlay" style="height:110px;">
                        <div class="d-flex align-items-center">
                            <h3 class="card-title text-white mb-0 d-inline-block">New Delhi</h3>
                            <div class="ms-auto">
                                <small class="card-text text-white fw-light">Sunday 15
                                    march</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 weather-small">
                        <div class="row">
                            <div class="col-8 border-end align-self-center">
                                <div class="d-flex">
                                    <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                                    <div class="ms-3">
                                        <h1 class="fw-light text-info mb-0">32<sup>0</sup></h1>
                                        <small>Sunny Rainy day</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h1 class="fw-light mb-0">25<sup>0</sup></h1>
                                <small>Tonight</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-5 col-xl-4">
                <!-- Column -->
                <div class="card">
                    <img class="card-img-top w-100 profile-bg-height" src="../assets/images/background/profile-bg.jpg"
                         alt="Card image cap">
                    <div class="card-body little-profile text-center">
                        <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="user"
                                                  class="rounded-circle shadow-sm" width="128"></div>
                        <h3 class="mb-0">Angela Dominic</h3>
                        <p>Web Designer &amp; Developer</p>
                        <a href="javascript:void(0)"
                           class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                        <div class="row text-center mt-3 justify-content-center">
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 fw-light">1099</h3><small class="text-muted">Articles</small>
                            </div>
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 fw-light">23,469</h3><small class="text-muted">Followers</small>
                            </div>
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 fw-light">6035</h3><small class="text-muted">Following</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card">
                    <div class="card-body bg-info rounded-top">
                        <h4 class="text-white card-title">My Contacts</h4>
                        <h6 class="card-subtitle text-white mb-0 op-5">Checkout my contacts here</h6>
                    </div>
                    <div class="message-box contact-box position-relative">
                        <div class="message-widget contact-widget position-relative">
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2"><img
                                        src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100">
                                    <span
                                        class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">James Smith</h5>
                                        <span class="text-muted fs-2">you were in video call</span>
                                        <span class="text-muted fs-2 d-block">45 mins ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-video feather-sm">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg>
                                        </button>
                                        <button type="button" href="#"
                                                class="btn btn-sm btn-light-primary text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-phone-incoming feather-sm">
                                                <polyline points="16 2 16 8 22 8"></polyline>
                                                <line x1="23" y1="1" x2="16" y2="8"></line>
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2"><img
                                        src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100">
                                    <span
                                        class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">Joseph Garciar</h5>
                                        <span class="text-muted fs-2">you were in video call</span>
                                        <span class="text-muted fs-2 d-block">2 mins ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-video feather-sm">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg>
                                        </button>
                                        <button type="button" href="#"
                                                class="btn btn-sm btn-light-success text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-phone-outgoing feather-sm">
                                                <polyline points="23 7 23 1 17 1"></polyline>
                                                <line x1="16" y1="8" x2="23" y2="1"></line>
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2"><img
                                        src="../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100">
                                    <span
                                        class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">Maria Rodriguez</h5>
                                        <span class="text-muted fs-2">you missed john call</span>
                                        <span class="text-muted fs-2 d-block">1 hour ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-video feather-sm">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg>
                                        </button>
                                        <button type="button" href="#" class="btn btn-sm btn-light-info text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-phone-missed feather-sm">
                                                <line x1="23" y1="1" x2="17" y2="7"></line>
                                                <line x1="17" y1="1" x2="23" y2="7"></line>
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2"><img
                                        src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100">
                                    <span
                                        class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">Henry Hernandez</h5>
                                        <span class="text-muted fs-2">you were in phone call</span>
                                        <span class="text-muted fs-2 d-block">2 days ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-video feather-sm">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg>
                                        </button>
                                        <button type="button" href="#"
                                                class="btn btn-sm btn-light-success text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-phone-outgoing feather-sm">
                                                <polyline points="23 7 23 1 17 1"></polyline>
                                                <line x1="16" y1="8" x2="23" y2="1"></line>
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2"><img
                                        src="../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100">
                                    <span
                                        class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">James Johnson</h5>
                                        <span class="text-muted fs-2">you were call forwarded</span>
                                        <span class="text-muted fs-2 d-block">55 mins ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-video feather-sm">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg>
                                        </button>
                                        <button type="button" href="#"
                                                class="btn btn-sm btn-light-warning text-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-phone-forwarded feather-sm">
                                                <polyline points="19 1 23 5 19 9"></polyline>
                                                <line x1="15" y1="5" x2="23" y2="5"></line>
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-center" data-bs-toggle="tab" href="#home" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity fill-white feather-sm">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                <span class="d-none d-md-inline-block fw-normal">Activity</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" data-bs-toggle="tab" href="#profile" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-users fill-white feather-sm">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="d-none d-md-inline-block fw-normal">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" data-bs-toggle="tab" href="#settings" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-settings fill-white feather-sm">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span class="d-none d-md-inline-block fw-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline position-relative">
                                    <div class="sl-item mt-2 mb-3">
                                        <div class="sl-left float-left me-3"><img src="../assets/images/users/1.jpg"
                                                                                  alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex align-items-center">
                                                    <h5 class="mb-0 font-weight-medium">
                                                        <a href="#" class="link">John Doe</a>
                                                    </h5>
                                                    <span class="sl-date text-muted ms-1">5 minutes ago</span>
                                                </div>

                                                <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img1.jpg" alt="user"
                                                            class="img-fluid rounded-3"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img2.jpg" alt="user"
                                                            class="img-fluid rounded-3"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img3.jpg" alt="user"
                                                            class="img-fluid rounded-3"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img4.jpg" alt="user"
                                                            class="img-fluid rounded-3"></div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-message-circle fill-white feather-sm text-info">
                                                            <path
                                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                                        </svg>
                                                        comments</a>
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-heart fill-white feather-sm text-danger">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                        </svg>
                                                        5 Likes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item my-4 border-top pt-4">
                                        <div class="sl-left float-left me-3"><img src="../assets/images/users/2.jpg"
                                                                                  alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex align-items-center">
                                                    <h5 class="mb-0 font-weight-medium"><a href="#" class="link">James
                                                            Smith</a></h5>
                                                    <span class="sl-date text-muted ms-1">5
                                                                minutes ago</span>
                                                </div>
                                                <div class="mt-3 row">
                                                    <div class="col-md-3 col-xs-12"><img
                                                            src="../assets/images/big/img1.jpg" alt="user"
                                                            class="img-fluid rounded-3"></div>
                                                    <div class="col-md-9 mt-3 mt-md-0">
                                                        <p class="fs-3"> Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing
                                                            elit. Integer nec odio. Praesent libero. Sed cursus
                                                            ante dapibus diam. </p> <a href="#" class="btn btn-success">
                                                            Design weblayout</a>
                                                    </div>
                                                </div>
                                                <div class="text-nowrap mt-3">
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-message-circle fill-white feather-sm text-info">
                                                            <path
                                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                                        </svg>
                                                        comments</a>
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             class="feather feather-heart fill-white feather-sm text-danger">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                        </svg>
                                                        5 Likes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item my-4 border-top pt-4">
                                        <div class="sl-left float-left me-3"><img src="../assets/images/users/3.jpg"
                                                                                  alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex align-items-center">
                                                    <h5 class="mb-0 font-weight-medium"><a href="#" class="link">Maria
                                                            Hernandez</a></h5>
                                                    <span class="sl-date text-muted ms-1">5
                                                                minutes ago</span>
                                                </div>
                                                <p class="mt-2 fs-3"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Integer nec odio. Praesent libero. Sed
                                                    cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                                                    elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                                                    Fusce nec tellus sed augue semper </p>
                                            </div>
                                            <div class="text-nowrap mt-3">
                                                <a href="javascript:void(0)" class="link me-2 font-weight-medium">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-message-circle fill-white feather-sm text-info">
                                                        <path
                                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                                    </svg>
                                                    comments</a>
                                                <a href="javascript:void(0)" class="link me-2 font-weight-medium">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-heart fill-white feather-sm text-danger">
                                                        <path
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                    5 Likes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item my-4 border-top pt-4">
                                        <div class="sl-left float-left me-3"><img src="../assets/images/users/4.jpg"
                                                                                  alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex">
                                                    <h5 class="mb-0 font-weight-medium"><a href="#" class="link">John
                                                            Doe</a></h5>
                                                    <span class="sl-date text-muted ms-1">5
                                                                minutes ago</span>
                                                </div>
                                                <blockquote class="mt-2 fs-3">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 border-end"><strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">Johnathan Deo</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-end"><strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">(123) 456 7890</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-end"><strong>Email</strong>
                                        <br>
                                        <p class="text-muted">johnathan@admin.com</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"><strong>Location</strong>
                                        <br>
                                        <p class="text-muted">London</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="mt-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                    arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                                    ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries </p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing
                                    software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h4 class="font-medium mt-4">Skill Set</h4>
                                <hr>
                                <h5 class="mt-4">Wordpress <span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">
                                        <span class="sr-only">50% Complete</span></div>
                                </div>
                                <h5 class="mt-4">HTML 5 <span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;">
                                        <span class="sr-only">50% Complete</span></div>
                                </div>
                                <h5 class="mt-4">jQuery <span class="pull-right">50%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                        <span class="sr-only">50% Complete</span></div>
                                </div>
                                <h5 class="mt-4">Photoshop <span class="pull-right">70%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;">
                                        <span class="sr-only">50% Complete</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe"
                                                   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com"
                                                   class="form-control form-control-line" name="example-email"
                                                   id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password"
                                                   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890"
                                                   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
