import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

import { Subject } from 'rxjs/Subject';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import 'rxjs/add/observable/throw';

@Injectable()
export class TestServiceService {

  constructor(private http: Http) { }

   /**
   * Get test data from the server.
   */
  data() {
    return this.http.get('api/test/').map(res => res.json()).catch(err => Observable.throw(err.json()));
  }
}
