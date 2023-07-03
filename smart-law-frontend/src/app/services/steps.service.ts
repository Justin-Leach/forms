import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpClient, HttpErrorResponse, HttpHeaders, HttpParams, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';

import { Step } from '../objects/Step';

@Injectable({
  providedIn: 'root'
})
export class StepsService {
  baseUrl: string

  constructor(private http: HttpClient) {
    this.baseUrl = environment.API_URL;
  }

  getAllSteps(): Observable<HttpResponse<any>>{
    let requestUrl = this.baseUrl + "/steps/";

    const options = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        // Authorization: "Bearer " + this.cookieService.get("token")
      }),
      observe: "response" as const,
      responseType: "json" as const
    };

    return this.http.get<Step>(requestUrl, options);
  }

  getStep(id:string): Observable<HttpResponse<any>>{
    let requestUrl = this.baseUrl + "/step/" + id;

    const options = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        // Authorization: "Bearer " + this.cookieService.get("token")
      }),
      observe: "response" as const,
      responseType: "json" as const
    };

    return this.http.get<Step>(requestUrl, options);
  }

  updateStepCompleted(id:string, completed: boolean): Observable<HttpResponse<any>>{
    let requestUrl = this.baseUrl + "/step/" + id + "/completed";

    const options = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        // Authorization: "Bearer " + this.cookieService.get("token")
      }),
      observe: "response" as const,
      responseType: "json" as const
    };

    return this.http.post<Step>(requestUrl, {completed}, options);
  }
}
