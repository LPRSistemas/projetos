import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {ApixuProvider} from "../../providers/apixu/apixu";
import {DetalhesPage} from "../detalhes/detalhes";

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  nomeCidade: string;
  temperatura: any;

  constructor(public navCtrl: NavController,
              public apiPrevisao: ApixuProvider) {

  }

  buscaPrevisaoDoTempo(): void {
    this.apiPrevisao.buscaPrevisaoDoTempo(this.nomeCidade,10)
      .subscribe(
        resposta =>
        {

        this.temperatura = resposta,
        console.log( this.temperatura.forecast.forecastday[0].date)
        },
        e => console.log('erro na busca' + e)
      )
    ;
  }

  detalhes(data: string): void{
    this.navCtrl.push(DetalhesPage, {data});
  }

}
