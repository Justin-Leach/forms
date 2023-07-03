import { Component, OnInit } from '@angular/core';

import { Step } from 'src/app/objects/Step';
import { StepsService } from 'src/app/services/steps.service';

import { Task } from 'src/app/objects/Task';
import { TasksService } from 'src/app/services/tasks.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss'],
})
export class DashboardComponent implements OnInit  {
  steps: Step[] = [];
  tasks: Task[] = [];

  constructor(private stepsService: StepsService, private tasksService: TasksService) { }

  ngOnInit(): void {
    this.stepsService.getAllSteps().subscribe(resp => {
        this.steps = resp.body;
    });

    this.tasksService.getTasks("1").subscribe(resp => {
      this.tasks = resp.body;
    });
  }

  onTaskCheckChange(task: any) {
    task.checked = !task.checked;
    this.tasksService.updateTaskCheck(task.id, task.checked).subscribe(resp => {
        if (task.checked) {
          this.steps[task.step_id - 1].checked_task_count = this.steps[task.step_id - 1].checked_task_count + 1;

          if (this.steps[task.step_id - 1].checked_task_count === this.steps[task.step_id - 1].tasks_count) {
              this.stepsService.updateStepCompleted(task.step_id, true).subscribe(resp => {
                this.steps[task.step_id - 1].completed = true;
            });
          }

        } else {
            if (this.steps[task.step_id - 1].checked_task_count === this.steps[task.step_id - 1].tasks_count) {
              this.stepsService.updateStepCompleted(task.step_id, false).subscribe(resp => {
                this.steps[task.step_id - 1].completed = false;
            });
          }
          this.steps[task.step_id - 1].checked_task_count = this.steps[task.step_id - 1].checked_task_count - 1;

        }
    });
  }

  onTaskUrgentChange(task: any) {
    task.urgent = !task.urgent;
    this.tasksService.updateTaskUrgent(task.id, task.urgent).subscribe(resp => {
    });
  }
}
