import Koa from 'koa';
import router from 'koa-simple-router'
import initCtrl from './controller/initController'
import config from './config/config'
import render from 'koa-swig';
import serve from 'koa-static';
import co from 'co';

const app = new Koa();

 initCtrl.init(app,router);

app.context.render = co.wrap(render({
  root: config.get('viewDir'),
  autoescape: true,
  cache: 'memory', // disable, set to false 
  ext: 'html',
  writeBody: false
}));

app.use(serve(config.get('staticDir')));


app.listen(config.get('port'));