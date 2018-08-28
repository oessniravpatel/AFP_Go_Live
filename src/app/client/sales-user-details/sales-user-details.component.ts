import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { SalesUserService } from '../services/sales-user.service';
import { Globals } from '.././globals';
import { ActivatedRoute } from '@angular/router';
import {HttpClient} from "@angular/common/http";
declare var AmCharts: any;
declare var $,jsPDF,pdf,addHTML,PerfectScrollbar: any;


@Component({
  selector: 'app-sales-user-details',
  providers: [ SalesUserService ],
  templateUrl: './sales-user-details.component.html'

})
export class SalesUserDetailsComponent implements OnInit {
  domainData;
  domainDatapre;
  ratingscale;
  areaksa;
  rcourse;
  ksaList;
  allcourse;
  assessmentData;
  constructor( private http: HttpClient,private SalesUserService: SalesUserService,public globals: Globals, private route: ActivatedRoute,private router: Router) { }



  ngOnInit() { debugger
   this.globals.isLoading = true;
   this.assessmentData='';
   
// AmCharts Print Script
    (function() {
  var beforePrint = function() {
    for(var i = 0; i < AmCharts.charts.length; i++) {
      var chart = AmCharts.charts[i];
      chart.div.style.width = "700px";
      chart.validateNow();
    }
  };
  var afterPrint = function() {
    for(var i = 0; i < AmCharts.charts.length; i++) {
      var chart = AmCharts.charts[i];
      chart.div.style.width = "100%";
      chart.validateNow();
    }
  };

  if (window.matchMedia) {
    var mediaQueryList = window.matchMedia('print');
    mediaQueryList.addListener(function(mql) {
      if (mql.matches) {
        beforePrint();
      } else {
        afterPrint();
      }
    });
  }

  window.onbeforeprint = beforePrint;
  window.onafterprint = afterPrint;
}());


// $('#cmd_content').click(function() {
	// $('.print_box_block').addClass('destroyblock');
	// $('.nav-tabs').hide();
		// var headings = $('.nav-tabs li a');
		// $('.tab-content .tab-pane').each(function(i, el){
			// $(this)
			  // .addClass('active')
			  // .prepend('<h3 class="print_domain_name">' + $(headings.get(i)).text() + '</h3>')
		// });
		// $('.panel-default').each(function(i, el){
			// $('.panel-title a').removeClass('collapsed');
			 // $('.panel-collapse').addClass('in');
		// });
  // var options = {
	    // pagesplit: true
  // };

  
  // var pdf = new jsPDF('p', 'mm', 'a4');
		
  // pdf.addHTML($(".print_box_block"), 20, 20, options, function() {
    // pdf.save('user_details.pdf');
  // });

// });




// $('#cmd').click(function() {
  // var options = {
  // };
  // var pdf = new jsPDF('p', 'pt', 'a4');
  // pdf.addHTML($("#preview_ksa"), 15, 20, options, function() {
    // pdf.save('ksapreview.pdf');
  // });
// });


let id = this.route.snapshot.paramMap.get('id');    
this.SalesUserService.getUserAssessDetail(id) 
.then((data) => 
{ 
  if(data=='fail'){
    this.router.navigate(['/dashboard']);
  } else {
    this.domainData = data['domain'];
    this.domainDatapre = data['domainrs'];
    this.areaksa=data['carears'];
    this.rcourse=data['rcourse'];
    this.allcourse=data['allcourse'];
    this.ksaList = data['ksa'];
    this.assessmentData = data['assessment'];
    // this.rscaleData = data['rscale'];
      var colorarray = ['#001F49','#799628','#F79317','#1BAC98','#65287E','#B8044A'];
      for(let obj of this.domainData)
        {
          let j = this.domainData.indexOf(obj);
          this.domainData[j].color = colorarray[j];
          if(this.domainData[j].ratingscale<=1){
            this.domainData[j].rscalename = "General Awareness";
          } else if(this.domainData[j].ratingscale<=2){
            this.domainData[j].rscalename = "Developing";
          } else if(this.domainData[j].ratingscale<=3){
            this.domainData[j].rscalename = "Intermediate";
          } else if(this.domainData[j].ratingscale<=4){
            this.domainData[j].rscalename = "Advanced";
          }  
        }
     
      // var colorarray = ['#001F49','#799628','#F79317','#1BAC98','#65287E','#B8044A'];
      // for(let obj of this.domainDatapre)
      //   {
      //     let j = this.domainDatapre.indexOf(obj);
      //     this.domainDatapre[j].color = colorarray[j];
      //   }

      //   var colorarray = ['#001F49','#799628','#F79317','#1BAC98','#65287E','#B8044A'];
      // for(let obj of this.ratingscale)
      //   {
      //     let j = this.ratingscale.indexOf(obj);
      //     this.ratingscale[j].color = colorarray[j];
      //   }

      //   var colorarray = ['#001F49','#799628','#F79317','#1BAC98','#65287E','#B8044A'];
      //   for(let obj of this.areaksa)
      //     {
      //       let j = this.areaksa.indexOf(obj);
      //       this.areaksa[j].color = colorarray[j];
      //     }
    var chart = AmCharts.makeChart("gneraluser_result", {
      "type": "serial",
      "startDuration": 0,
      "dataProvider": this.domainData,
      "valueAxes": [{
        "position": "left",
        "title": "Rating Scale",
      "axisAlpha": 1, 
      "titleFontSize" : 16,
      "integersOnly": true,
        "minimum": 0,
      "maximum": 5,
      "precision" : 0,
        "dashLength": 5
      }],
      "categoryField": "domain",
      "categoryAxis": {
        "gridPosition": "start",
      "title": "Domains",
      "axisAlpha": 1, 
      "titleFontSize" : 16,
      "dashLength": 5,
        "autoWrap": true
      },
		   "responsive": {
			"enabled": true
			},
      "graphs": [{
        "balloonText": "<b>[[rscalename]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 1,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "ratingscale",
      "fixedColumnWidth": 30,
      "labelText" : "[[value]]"
      }],
      "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
      },
	   "export": {
    	"enabled": true,
		"menu": []
     }
    });
 
    var chart = AmCharts.makeChart("chartdiv1", {
        "type": "serial",
      "theme": "light",
        "legend": {
            "horizontalGap": 0,
            "maxColumns": 4,
            "position": "bottom",
        "useGraphSettings": true,
        "markerSize": 10
        },
        "dataProvider": this.areaksa,
        "valueAxes": [{
            "stackType": "regular",
            "axisAlpha": 1,
            "gridAlpha": 0,
        "dashLength": 5,
        "minimum": 0,
      "maximum": 100
        }],
        "graphs": [{
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
        "fillColors": "#632D6B",
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
            "title": "1 - General Awareness",
            "type": "column",
        "color": "#000000",
            "valueField": "awareness"
        }, {
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
        "fillColors": "#F68E2F",
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
            "title": "2 - Developing",
            "type": "column",
        "color": "#000000",
            "valueField": "developing"
        }, {
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
        "fillColors": "#269A8A",
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
            "title": "3 - Intermediate",
            "type": "column",
        "color": "#000000",
            "valueField": "intermediate"
        }, {
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
        "fillColors": "#A41C36",
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
            "title": "4 - Advanced",
            "type": "column",
        "color": "#000000",
            "valueField": "advanced"
        }],
        "categoryField": "ratingscale",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 1,
            "gridAlpha": 0,
            "position": "left",
        "dashLength": 5,"autoWrap": true
        },
       "export": {
    "enabled": true,
    "menu": []
  }
    
    });

    var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
      "theme": "light",
        "legend": {
            "horizontalGap": 0,
            "maxColumns": 4,
            "position": "bottom",
        "useGraphSettings": true,
        "markerSize": 10
        },
        "dataProvider": this.domainDatapre,
        "valueAxes": [{
            "stackType": "regular",
            "axisAlpha": 1,
            "gridAlpha": 0,
        "dashLength": 5,
        "minimum": 0,
      "maximum": 100
        }],
        "graphs": [{
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
        "fillColors": "#632D6B",
            "title": "1 - General Awareness",
            "type": "column",
        "color": "#000000",
            "valueField": "awareness"
        }, {
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
        "fillColors": "#F68E2F",
            "title": "2 - Developing",
            "type": "column",
        "color": "#000000",
            "valueField": "developing"
        }, {
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
        "fillColors": "#269A8A",
            "title": "3 - Intermediate",
            "type": "column",
        "color": "#000000",
            "valueField": "intermediate"
        }, {
            "balloonText": "<b>[[title]]</b><br><b>[[value]]%</b>",
            "fillAlphas": 0.6,
        "fillColors": "#A41C36",
            "labelText": "[[value]]%",
            "lineAlpha": 0.3,
            "title": "4 - Advanced",
            "type": "column",
        "color": "#000000",
            "valueField": "advanced"
        }],
        "categoryField": "ratingscale",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 1,
            "gridAlpha": 0,
            "position": "left",
        "dashLength": 5,"autoWrap": true
        },
         "export": {
    "enabled": true,
    "menu": []
  }
    
    });

  //   var chart = AmCharts.makeChart( "domain_chart", {
  //     "type": "pie",
  //    "startDuration": 0,
  //     "dataProvider": this.domainDatapre,
  //     "valueField": "value",
  //     "titleField": "domain",
  //     "labelRadius": -20,
  //     "labelText": "[[percents]]%",
  //     "labelTickColor": "#FFFFFF",
  //     "color" : "#fff",
  //     "labelColorField": "#FFFFFF",
  //     // "balloonText": "",
  //     "colorField": "color",
  //     "percentPrecision" : 0,
  //     "balloon":{
  //        "fixedPosition":true
  //     },
	//   "legend":{
	// 	"position":"bottom",
	// 	"autoMargins":true,  "equalWidths":true, "switchable":false,
	// 	"align":"center", 
	// 	"valueAlign": "center",
  //       "labelWidth": '100%',
  //       "valueWidth": 0, "maxColumns": 2
	//  },
	//   "responsive": {
	// 		"enabled": true
	// 		},
  //    "balloonText": "[[domain]]<br><b>([[percents]]%)</b>",
  //     "export": {
  //       "enabled": false
  //     }
  //   });
  //   var chart = AmCharts.makeChart( "scale_chart", {
  //     "type": "pie",
  //    "startDuration": 0,
  //     "dataProvider": this.ratingscale,
  //     "valueField": "value",
  //     "titleField": "domain",
  //     "labelRadius": -20,
  //     "labelText": "[[percents]]%",
  //     "labelTickColor": "#FFFFFF",
  //     "color" : "#fff",
  //     "labelColorField": "#FFFFFF",
  //     // "balloonText": "",
  //     "colorField": "color",
  //     "percentPrecision" : 0,
  //     "balloon":{
  //        "fixedPosition":true
  //     },
	//     "legend":{
	// 	"position":"bottom",
	// 	"autoMargins":true,  "equalWidths":true, "switchable":false,
	// 	"align":"center", 
	// 	"valueAlign": "center",
  //       "labelWidth": '100%',
  //       "valueWidth": 0,"maxColumns": 2
	//  },
	// 	   "responsive": {
	// 		"enabled": true
	// 		},
  //     "balloonText": "[[domain]]<br><b>([[percents]]%)</b>",
  //     "export": {
  //       "enabled": false
  //     }
  //   });
  //   var chart = AmCharts.makeChart( "ca_chart", {
  //       "type": "pie",
  //      "startDuration": 0,
  //       "dataProvider": this.areaksa,
  //       "valueField": "value",
  //       "titleField": "domain",
  //       "labelRadius": -20,
  //       "labelText": "[[percents]]%",
  //       "labelTickColor": "#FFFFFF",
  //       "color" : "#fff",
  //       "labelColorField": "#FFFFFF",
  //       // "balloonText": "",
  //       "colorField": "color",
  //       "percentPrecision" : 0,
  //       "balloon":{
  //        	"fixedPosition":true
  //       },
	// 	 "legend":{
	// 	"position":"bottom",
	// 	"autoMargins":true,  "equalWidths":true, "switchable":false,
	// 	"align":"center", 
	// 	"valueAlign": "center",
  //       "labelWidth": '100%',
  //       "valueWidth": 0,
	// 	"maxColumns": 2
	//  },
	// 	   "responsive": {
	// 		"enabled": true
	// 		},
  //       "balloonText": "[[domain]]<br><b>([[percents]]%)</b>",
  //       "export": {
  //         "enabled": false
  //       }
  //     });
  
  
// $('#cmd_content').click(function() {

  // // So that we know export was started
 // alert("Starting export...");

  // // Define IDs of the charts we want to include in the report
  // var ids = ["gneraluser_result", "chartdiv1", "chartdiv"];

  // // Collect actual chart objects out of the AmCharts.charts array
  // var charts = {}
  // var charts_remaining = ids.length;
  // for (var i = 0; i < ids.length; i++) {
    // for (var x = 0; x < AmCharts.charts.length; x++) {
      // if (AmCharts.charts[x].div.id == ids[i])
        // charts[ids[i]] = AmCharts.charts[x];
    // }
  // }
  // console.log(charts);

  // // Trigger export of each chart
  // for (var y in charts) {
    // if (charts.hasOwnProperty(y)) {
      // var chart = charts[y];
      // chart["export"].capture({}, function() {
        // this.toPNG({}, function(data) {

          // // Save chart data into chart object itself
          // this.setup.chart.exportedImage = data;

          // // Reduce the remaining counter
          // charts_remaining--;
// alert("xfcgh"+charts_remaining);
          // // Check if we got all of the charts
          // console.log("Generating PDF...");

    // // Initiliaze a PDF layout
    // var layout = {
      // "content": [] };


    // // Let's add a custom title
    // layout.content.push({
      // "text": "Lorem ipsum dolor sit amet, consectetur adipiscing",
      // "fontSize": 15 });


    // // Now let's grab actual content from our <p> intro tag
    // layout.content.push({
      // "text": document.getElementById("intro").innerHTML });


    // // Add bigger chart
    // layout.content.push({
      // "image": charts["gneraluser_result"].exportedImage,
      // "fit": [523, 300] });


    // // Put two next charts side by side in columns
    // layout.content.push({
      // "columns": [{
        // "width": "50%",
        // "image": charts["chartdiv1"].exportedImage,
        // "fit": [250, 300] },
      // {
        // "width": "*",
        // "image": charts["chartdiv"].exportedImage,
        // "fit": [250, 300] }],

      // "columnGap": 10 });


    // // Add chart and text next to each other
    // layout.content.push({
      // "columns": [{
        // "width": "25%",
        // "image": charts["chartdiv"].exportedImage,
        // "fit": [125, 300] },
      // {
        // "width": "*",
        // "stack": [
        // document.getElementById("note1").innerHTML,
        // "\n\n",
        // document.getElementById("note2").innerHTML] }],


      // "columnGap": 10 });


    // // Trigger the generation and download of the PDF
    // // We will use the first chart as a base to execute Export on
    // chart["export"].toPDF(layout, function (data) {
      // this.download(data, "application/pdf", "amCharts.pdf");
    // });

        // });
      // });
    // }
  // }

// });
  
   new PerfectScrollbar('.preview_ksa .scroll_table');
   new PerfectScrollbar('.course_rec .scroll_course');
  }
  setTimeout(function(){ 
    if ($("body").height() < $(window).height()) {
      $('footer').addClass('footer_fixed');
    } 
  }, 1000);
  this.globals.isLoading = false;
}, 
(error) => 
{
  //alert('error');
  this.globals.isLoading = false;
  this.router.navigate(['/pagenotfound']);
});	 

}



  
onKSASPrint()
{
    var mywindow = window.open('', 'PRINT');

	  $("#page_details .export-data").css("display","none");
	  $("#page_details .back_btn").css("display","none");
	  $("#page_details .red_btn").css("display","none");
	  $("#preview_ksa #print_table_none").css("display","none");
	   
	  $("#preview_ksa #heading_tr_print").css("display","table-row");
	  $("#preview_ksa table").css("border-left","1px solid #999");
	  $("#preview_ksa table").css("border-top","1px solid #999");
	  $("#preview_ksa table th").css("border-right","1px solid #999");
	  $("#preview_ksa table th").css("border-bottom","1px solid #999");
	  $("#preview_ksa table td").css("border-right","1px solid #999");
	  $("#preview_ksa table td").css("border-bottom","1px solid #999");
	  $("#preview_ksa table td").css("padding","5px");
	  $("#preview_ksa table th").css("padding","5px");
	  $(".table-bordered>tbody>tr>td.width_30").css("width","20%");

	  $(".preview_ksa .scroll_table").css("height","10px");
	  
	  //$('.preview_ksa .scroll_table').addClass('destroyscroll');
	   
    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body>');
	//mywindow.document.write( "<link rel=\"stylesheet\" href=\"assest/css/print.css\" type=\"text/css\" media=\"print\"/>" );
	
	mywindow.document.write(document.getElementById('page_details').innerHTML);
    mywindow.document.write(document.getElementById('preview_ksa').innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();


	  $("#page_details .export-data").removeAttr('style');
	  $("#page_details .back_btn").removeAttr('style');
	  $("#page_details .red_btn").removeAttr('style');
	  $("#preview_ksa #print_table_none").removeAttr('style');
	   
	  $("#preview_ksa #heading_tr_print").removeAttr('style');
	  $("#preview_ksa table").removeAttr('style');
	  $("#preview_ksa table td").removeAttr('style');
	  $("#preview_ksa table th").removeAttr('style');
	  $(".preview_ksa .scroll_table").removeAttr('style');
	  $(".table-bordered>tbody>tr>td.width_30").removeAttr('style');
    return true;
	
	
}


//Print Custom JS
	onPrint(){
	$('.nav-tabs').hide();
		var headings = $('.nav-tabs li a');
		$('.tab-content .tab-pane').each(function(i, el){
			$(this)
			  .addClass('active')
			  .prepend('<h3 class="print_domain_name">' + $(headings.get(i)).text() + '</h3>')
		});
		$('.panel-default').each(function(i, el){
			$('.panel-title a').removeClass('collapsed');
			 $('.panel-collapse').addClass('in');
		});
			window.print();
		$('.print_domain_name').css('display','none');
		$('.nav-tabs').show();
		var headings = $('.nav-tabs li a');
		$('.tab-content .tab-pane').each(function(i, el){
			if(i!=0){
			$(this)
			  .removeClass('active');
			  //$(.print_domain_name).css('display','none');
			}
		});	
		$('.panel-default').each(function(i, el){
			$('.panel-title a').addClass('collapsed');
			 $('.panel-collapse').removeClass('in');
		});
		$('.panel-default:first-child .panel-title a').removeClass('collapsed');
			 $('.panel-default:first-child .panel-collapse').addClass('in');

	}

  


}
