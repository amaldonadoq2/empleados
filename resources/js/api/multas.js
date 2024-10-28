import request from '@/utils/request';
import Resource from '@/api/resource';

class MultasResource extends Resource {
  constructor() {
    super('multas');
  }
}

export { MultasResource as default };
