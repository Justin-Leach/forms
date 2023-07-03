export class Task {
  id: string;
  title: string;
  checked: boolean;
  urgent: boolean;
  notes: string;

  constructor(id: string, title: string, checked: boolean, urgent: boolean, notes: string){
      this.id = id;
      this.title = title;
      this.checked = checked;
      this.urgent = urgent;
      this.notes = notes;
  }
}
