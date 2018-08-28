import { Component, OnInit } from '@angular/core';
import { DashboardService } from '../services/dashboard.service';
import { Router } from '@angular/router';
import { Globals } from '.././globals';
import { ActivatedRoute } from '@angular/router';
declare var AmCharts: any;
declare var $,PerfectScrollbar: any;
@Component({
  selector: 'app-user-assessment-details',
  providers: [ DashboardService ],
  templateUrl: './user-assessment-details.component.html'
})
export class UserAssessmentDetailsComponent implements OnInit {
  assessmentData;
  domainData;
  rscaleData;
  careaData;
  constructor(private DashboardService: DashboardService, public globals: Globals, private route: ActivatedRoute,private router: Router) { }

  ngOnInit() {
    this.globals.isLoading = true;
    setTimeout(function(){ 
      if ($("body").height() < $(window).height()) {
        $('footer').addClass('footer_fixed');
      } 
    }, 1000);

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


    //new PerfectScrollbar('.domain_desc .accordion_scroll');
    this.assessmentData = {};
    let id = this.route.snapshot.paramMap.get('id');    
    this.DashboardService.getUserAssessDetail(id)
		.then((data) => 
		{ 
      if(data=='fail'){
        this.router.navigate(['/dashboard']);
      } else {
        this.assessmentData = data['assessment'];
        this.domainData = data['domain'];
        this.rscaleData = data['rscale'];
        this.careaData = data['carea'];
		console.log(this.careaData);
        var colorarray = ['#002B49','#FFC35C','#0085AD','#8F993E','#A50034','#642F6C','#E94628','#21848B','#050000','#77C5D5','#FB8F2E','#B7006A','#005F67','#898D8D','#FABCAD'];
        for(let obj of this.domainData){
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
          "fixedColumnWidth": 35,
          "labelText" : "[[value]]"
          }],
          "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
          }
        });
      }
      this.globals.isLoading = false;
    }, 
		(error) => 
		{
      //alert('error');
      this.globals.isLoading = false;
      this.router.navigate(['/pagenotfound']);
		});	 
    
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
			
			  //.prepend('<h3>' + $(headings.get(i)).text() + '</h3>')
			  
		});	

	}
}
