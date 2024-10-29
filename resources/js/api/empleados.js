import request from '@/utils/request';
import Resource from '@/api/resource';

class EmpleadosResource extends Resource {
  constructor() {
    super('empleados');
  }
}

export { EmpleadosResource as default };
