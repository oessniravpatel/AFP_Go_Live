import { Component, OnInit } from '@angular/core';
declare var $: any;


@Component({
  selector: 'app-access-denied',
  templateUrl: './access-denied.component.html'

})
export class AccessDeniedComponent implements OnInit {

  constructor() { }

  ngOnInit() {
	  $("html").removeClass("index_admin"); 
  }

}
