import { Component } from '@angular/core';
import { TestServiceService } from './@core/test_service/test-service.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  data: any = [];

  constructor(private test: TestServiceService) {
    this.test.data().subscribe(
      res => {
        this.data = res;

      }
    );
  }
}
