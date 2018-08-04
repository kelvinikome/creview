@extends('layouts.page-layout')

@section('content')
<?php 
    $admin = false;
    if ($data['user'])
        if ($data['page']->author_id == $data['user']->id){
            $admin = true;
        }
?>


<!-- Section:Biography -->
    <div class="panel panel-default">
        <div class="panel-body">
          <div class="card card-block text-xs-left">
            <h2 class="card-title" style="color:#009688"><i class="fa fa-user fa-fw"></i>Biography</h2>
            <div style="height: 15px"></div>
              <p>AHM Kamal got B.Sc. and M.Sc. on Computer Science and Engineering from SUST, Bagladesh in 2004 and 2005 respectively. After graduation he served as a Lecturer at the Department of Computer Science and Engineering (CSE) in Institute of Science, Trade and Technology, Bangladesh. In 2009, he joined in a Public University, Jessore University of Science and Technology, as a Lecture at the CSE Department. He then promoted as an Assistant Professor by 2012. In 2015, Mr. Subrata changed his professional place and recruited as an Assistant Professor at the Department of Computer Science and Engineering in Jatiya Kabi Kazi Nazrul Islam University, Bangladesh and serving to date.</p>
          </div>
        </div>
      </div>
<!-- End:Biography -->

<!--Section:Interests-->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="card card-block">
          <h2 class="card-title"  style="color:#009688"><i class="fa fa-rocket fa-fw"></i>Interests</h2>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item">Cloud & Parallel Computing</li>
            <li class="list-group-item">Big Data Analysis and Management</li>
            <li class="list-group-item">High-performance and Low-Power Real-Time Systems</li>
            <li class="list-group-item">Mobile Embedded Systems and Network Security</li>
          </ul>
        </div>
    </div>
  </div>
<!-- End :Interests -->

<!-- Section:Awards -->
<div class="panel panel-default">
    <div class="panel-body">
          <div class="card card-block">
            <h2 class="card-title"  style="color:#009688"><i class="fa fa-trophy fa-fw"></i>Awards</h2>
            <div style="height: 15px"></div>
            <table class="table table-bordered table-hover">
              <thead class="thead-default">
                <tr>
                  <th>Year</th>
                  <th>Name of the award</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2006</td>
                  <td>Cloud & Parallel Computing</td>
                </tr>
                <tr>
                  <td>2009</td>
                  <td>Big Data Analysis and Management</td>
                </tr>
                <tr>
                  <td>2013</td>
                  <td>High-performance and Low-Power Real-Time Systems</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
<!-- End:Awards -->

<!-- Section:Teaching Summary -->
<div class="panel panel-default">
    <div class="panel-body">
          <div class="card card-block">
            <h2 class="card-title" style="color:#009688"><i class="fa fa-cubes fa-fw"></i>Teaching Summary</h2>
            <div style="height: 15px"></div>
            <table class="table table-bordered">
              <thead class="thead-default">
                <tr>
                  <th>Year</th>
                  <th>Rank</th>
                  <th>Company/Institute/University</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2006-Present</td>
                  <td>Associate Professor</td>
                  <td>Jatiya Kabi Kazi Nazrul Islam University</td>
                </tr>
                <tr>
                  <td>2004-2006</td>
                  <td>Lecturer</td>
                  <td>Brac University</td>
                </tr>
                <tr>
                  <td>2003-2004</td>
                  <td>Senior System Administrator</td>
                  <td>Axle Technologies</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
<!-- End:Teaching Summary -->

<!-- Section:Class Observing -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="card card-block">
          <h2 class="card-title" style="color:#009688"><i class="fa fa-book fa-fw"></i>Classes Observing</h2>
          <div style="height: 15px"></div>
          <table class="table table-bordered">
            <thead class="thead-default" >
              <tr>
                <th>Course Code</th>
                <th>Course Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CSE-121</td>
                <td>Structured Programming</td>
              </tr>
              <tr>
                <td>CSE-221</td>
                <td>Algorithms</td>
              </tr>
              <tr>
                <td>CSE-305</td>
                <td>Theory of Computation</td>
              </tr>
              <tr>
                <td>CSE-405</td>
                <td>Network Security</td>
              </tr>
              <tr>
                <td>CSE-439</td>
                <td>Digital Image Processing</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
<!-- End:Class Observing -->

<!-- Section:Resources -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="card card-block">
          <h2 class="card-title" style="color:#009688"><i class="fa fa-database fa-fw"></i>Resources</h2>
          <div style="height: 15px"></div>
          <table class="table table-bordered">
            <thead class="thead-default">
              <tr>
                <th>Topic</th>
                <th>Info</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>How Bubble Sort Works</td>
                <td style="border-left: 3px solid #009688;">Bubble sort. Bubble sort, sometimes referred to as sinking sort, is a simple sorting algorithm that repeatedly steps through the list to be sorted, compares each pair.
                  <div class="find-more">
                    Find out more on:
                    <span class="label label-theme"><i class="fa fa-file-pdf-o"><a href="#"> PDF</a></i></span>
                    <span class="label label-theme"><i class="fa fa-youtube-square"><a href="#"> YouTube</a></i></span>
                    <span class="label label-theme"><i class="fa fa-slideshare"><a href="#"> SlideShare</a></i></span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Greedy Method</td>
                <td style="border-left: 3px solid #009688;">A greedy algorithm is an algorithmic paradigm that follows the problem solving heuristic of making the locally optimal choice at each stage with the hope of finding a global optimum.
                  <div class="find-more">
                    Find out more on:
                    <span class="label label-theme"><i class="fa fa-file-pdf-o"><a href="#"> PDF</a></i></span>
                    <span class="label label-theme"><i class="fa fa-youtube-square"><a href="#"> YouTube</a></i></span>
                    <span class="label label-theme"><i class="fa fa-slideshare"><a href="#"> SlideShare</a></i></span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>EDI Security</td>
                <td style="border-left: 3px solid #009688;">Electronic data interchange (EDI) is a major innovation in the practical use of computing. It is already being used extensively in some segments of the retailing
                  <div class="find-more">
                    Find out more on:
                    <span class="label label-theme"><i class="fa fa-file-pdf-o"><a href="#"> PDF</a></i></span>
                    <span class="label label-theme"><i class="fa fa-youtube-square"><a href="#"> YouTube</a></i></span>
                    <span class="label label-theme"><i class="fa fa-slideshare"><a href="#"> SlideShare</a></i></span>
                  </div>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
<!-- End:Resources -->

<!-- Section:Publications -->
<div class="panel panel-default">
    <div class="panel-body">
          <div class="card card-block text-xs-left" style="margin-bottom:15px;">
            <h2 class="card-title" style="color:#009688"><i class="fa fa-newspaper-o fa-fw"></i> Publications</h2>
            <div style="height: 15px"></div>
            <ul class="list-group">
              <li class="list-group-item">A H M Kamal,"Inserting Item to a Sorted List",USTC Teachers Annual (USTA - 2002),8(1),2002</li>
              <li class="list-group-item">A H M Kamal, Cross application of Round Robin Scheduling and Shortest Job First Serve in CPU Scheduling to improve preemptive scheduling, Accepted for publication at Kabi Nazrul University Journal - 2011</li>
              <li class="list-group-item">A H M Kamal, UB Operator precedence parsing algorithm, Accepted for Computer Science & Engineering R esearch Journal (CSERJ) in Vol. 7 (2011) (ISSN: 1990-4010) of Chittagong University of Engineering and Technology (CUET)</li>
              <li class="list-group-item">A H M Kamal, Retrieving Packets from Losing during Service Disruption Time, During Vertical Handover among UMTS and WLAN, Int. J. Advanced Networking and Applications, Volume 03, Issue 04, pp 1229-1232 (2012)</li>
              <li class="list-group-item">A H M Kamal, An Algorithm to trigger VHO based on the speed of roamer- who is just leaving the WLAN in a room,International Journal of Emerging Technologies in Science and Engineering, Canada, Vol: 3, No 1, pp:21-25, 2010</li>
              <li class="list-group-item">A. H. M. Kamal,"Use of ICTs in Gender Equalization" , USTC Teachers Annual (USTA-2010)</li>
              <li class="list-group-item">A H M Kamal,"ICT in Managing Disaster in Bangladesh",USTC Teachers Annual (USTA-2010)</li>
              <li class="list-group-item">Md. Saiful Islam and AHM Kamal, “Ratio method for solving any equation of single variable”, International Journal of Engineering and Technology, Vol-6, Issue-2, June 2009, ISSN: 1812-7711</li>
              <li class="list-group-item">A H M Kamal, Montse Parada, "Blob translation based estimation technique to handle occlusion while using mean-shift in tracking",Research Journal of applied sciences, vol. 4, issue 4, pp 129-133, 2009</li>
              <li class="list-group-item">A H M Kamal,"An easy, flexible and linear way for generating precedence functions", Multimedia Cyberscape journal (MMCJ), Malaysia, Vol: 2, pp. 44-49, 2004</li>
            </ul>
          </div>
      </div>
  </div>
<!-- End:Publications -->



@endsection

