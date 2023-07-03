import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpClient, HttpErrorResponse, HttpHeaders, HttpParams, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';

import { Task } from '../objects/Task';

@Injectable({
  providedIn: 'root'
})
export class TasksService {
  baseUrl: string

  constructor(private http: HttpClient) {
    this.baseUrl = environment.API_URL;
  }

  getTasks(id:string): Observable<HttpResponse<any>>{
    let requestUrl = this.baseUrl + "/tasks/" + id;

    const options = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        // Authorization: "Bearer " + this.cookieService.get("token")
      }),
      observe: "response" as const,
      responseType: "json" as const
    };

    return this.http.get<Task>(requestUrl, options);
  }

  updateTaskCheck(id: string, checked: boolean): Observable<HttpResponse<any>>{
    let requestUrl = this.baseUrl + "/task-check/" + id;

    const options = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        // Authorization: "Bearer " + this.cookieService.get("token")
      }),
      observe: "response" as const,
      responseType: "json" as const
    };

    return this.http.post<Task>(requestUrl, {checked}, options);
  }

  updateTaskUrgent(id: string, urgent: boolean): Observable<HttpResponse<any>>{
    let requestUrl = this.baseUrl + "/task-urgent/" + id;

    const options = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        // Authorization: "Bearer " + this.cookieService.get("token")
      }),
      observe: "response" as const,
      responseType: "json" as const
    };

    return this.http.post<Task>(requestUrl, {urgent}, options);
  }
}
