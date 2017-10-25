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

  diaPesquisa: any;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.diaPesquisa = this.navParams.get("data");

    do {

      this.texto += this.diaPesquisa.hour[this.i].time;

       this.i++;

    } while (this.i < 24);

  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad DetalhesPage');
  }

  texto: any;
  i: number = 0;
}
