export class Step {
  id: string;
  title: string;
  completed: boolean;
  tasks_count: number;
  checked_task_count: number;

  constructor(id: string, title: string, completed: boolean, tasks_count: number, checked_task_count: number){
      this.id = id;
      this.title = title;
      this.completed = completed;
      this.tasks_count = tasks_count;
      this.checked_task_count = checked_task_count;
  }
}
