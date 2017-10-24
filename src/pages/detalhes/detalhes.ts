import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the DetalhesPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-detalhes',
  templateUrl: 'detalhes.html',
})
export class DetalhesPage {

  diaPesquisa: string;


  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.diaPesquisa = this.navParams.get("data");



    do {
      this.texto += "<ion-icon item-left><img style='width: 50px' src='http:"+this.diaPesquisa.hour[this.i].condition.icon+"'></ion-icon><ion-label>"+this.diaPesquisa.hour[this.i].time+"</ion-label>";
      this.i++;

    } while (this.i < 24);


  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad DetalhesPage');
  }

  texto: any;

  i: number = 1;
}
