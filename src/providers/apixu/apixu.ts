import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
import {Observable} from "rxjs/Observable";

/*
  Generated class for the ApixuProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class ApixuProvider {

  constructor(public http: Http) {

  }
  buscaTemperatura(cidade:string):Observable<any>{
    let _url ='http://api.apixu.com/v1/current.json?key=787911efba2545c4829162013170910&q=';
    _url = _url + cidade;
    return this.http.get(_url).map(dados => dados.json());
  }

buscaPrevisaoDoTempo(cidade:string,dias:number):Observable<any>{
    let _url ='http://api.apixu.com/v1/forecast.json?key=787911efba2545c4829162013170910&q=';
    _url = _url + cidade + '&days=' +dias;

    return this.http.get(_url).map(dados => dados.json());
  }
}
