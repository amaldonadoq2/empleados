import request from '@/utils/request';
import Resource from '@/api/resource';

class EmpresasResource extends Resource {
  constructor() {
    super('empresas');
  }

  list() {
    return request({
      url: '/todasEmpresas',
      method: 'get',
    });
  }
}

export { EmpresasResource as default };
