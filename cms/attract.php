<?php include "$_SERVER[DOCUMENT_ROOT]\cms\include\header.php";
	  include  "$_SERVER[DOCUMENT_ROOT]\cms\include\header1.php";?>

	<style>
		body {
		background-image:url(../img/BG2.jpg);
	}
</style>
	   <div class="container-fluid">
       <div  style="font-size: 230%; font-weight:bold; padding-top: 80px; padding-left: 10px" >
    	Attractions
        <hr width="85%" align="left" size="1px"> 
		  </div>
		   <div >
   		 <p>As the capital of Meghalaya, Shillong has endured as a great destination that fits the dream of nature lovers for many years. Often called by nicknames like the "Scotland of the East" or "Scotland of India". Shillong is today one of the India's leading centers for fashion, entertainment, art and culture. Just the mere mention of Shillong conjures up images of the famous water falls and caves.</p> 
         <p>Located on Khasi Hills, the colorful city offers adventurous outdoor activities such as rock climbing and boating..</p>
<div id="caves"></div>
<p>Also known for the state to hit the maximum rainfall in a calender the year; it's capital city, Shillong centers the most active part of the state in terms of business as well as a tourist destination. The city’s shopping scene ranges from shopping centers to open-air markets and boutiques. An overview of the top tourist attractions in Meghalaya:</p> 
		   </div>
 	   </div>
       <div class="row">
        <div class="col-lg-2">
         <div class="left-notify" >
      	<ul>
        	<li><a href="#caves">Cavings</a></li>
            <li><a href="#waterfalls">Waterfalls</a></li>
            <li><a href="#">Local Attractions</a></li>
            </ul></div>
		   </div>
            
            <div class="col-lg-10" >
				 <h2>Caves</h2>
            <div class="row" >
    <div class="col-md-4">
      <div class="thumbnail">
        
          <img src="../img/arwahCave.jpg" alt="ArwahCave" style="width:100%">
          <div class="caption">
            <p>Arwah Cave, Cherrapunjee- a magnificient place located in small town called Sohra .</p>
            <p align="right"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i></a></p>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
       
          <img src="../img/KremLiat.jpg" alt="KreLiatCave" style="width:100%">
          <div class="caption">
            <p>Krem Liat Prah, Shnongrim Ridge, East Jaintia Hills- the longest cave in the state.</p>
            <p align="right"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i></a></p>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        
          <img src="../img/mawcave.jpg" alt=SijuCave" style="width:100%">
          <div class="caption">
            <p>Siju CAve, Baghmara, South Garo Hills- the bat cave, one of the longest cave system in the Indian Sub-continent .</p>
            <p align="right"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i></a></p>
          </div>
        
      </div>
    </div>
  </div>
      
      <h2>Water Falls</h2>
      <div class="row" id="waterfalls">
      <div class="col-md-4">
      <div class="thumbnail">
        
          <img src="../img/elephantFalls.jpg" alt="ElephantFalls" style="width:100%">
          <div class="caption">
            <p>Elephant Falls,Upper Shillong, Shillong- the not so far from the city falls.</p>
            <p align="right"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i></a></p>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
       
          <img src="../img/KynremFalls.jpg" alt="KynremFalls" style="width:100%">
          <div class="caption">
            <p>Kynrem Falls, Cherrapunjee- the 7th highest falls in India.</p>
            <p align="right"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i></a></p>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        
          <img src="../img/NohkalikaiWaterfalls.jpg" alt="NohkalikaiWaterfalls" style="width:100%">
          <div class="caption">
            <p>Nohkalikai Water Falls, Cherrapunjee- well the highest waterfall in India.</p>
            <p align="right"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-location-arrow"></i></a></p>
          </div>
        
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 25.244606, lng:  91.724107};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
      var customLabel = {
        cave: {
          label: 'C'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl(["$_SERVER[DOCUMENT_ROOT]\cms\xml-markers.php", function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4ll09qVUnFFJyb6DGHEHKHf-rw9R5u9o&callback=initMap">
    </script>
    
            
<?php include "$_SERVER[DOCUMENT_ROOT]\cms\include\Footer.php" ?>