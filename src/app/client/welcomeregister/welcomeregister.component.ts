import { Component, OnInit } from '@angular/core';
declare var $: any;
import { Globals } from '.././globals';

@Component({
  selector: 'app-welcomeregister',
  templateUrl: './welcomeregister.component.html'

})
export class WelcomeregisterComponent implements OnInit {

  constructor(public globals: Globals) { }

  ngOnInit() {
    setTimeout(function(){ 
      if ($("body").height() < $(window).height()) {
        $('footer').addClass('footer_fixed');
      } 
    }, 1000);
    this.globals.isLoading = false;
  }

}
