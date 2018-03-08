const express = require('express');
const bodyParser = require('body-parser');
const exphbs = require('express-handlebars');
const path = require('path');
const nodemailer = require('nodemailer');

const app = express();

// View engine setup(handlebars in the case)
app.engine('handlebars', exphbs());
app.set('view engine', 'handlebars');

// Static folder
app.use('/public', express.static(path.join(__dirname, 'public')));
app.use('/js', express.static(__dirname + '/node_modules/bootstrap/dist/js')); // redirect bootstrap JS
app.use('/js', express.static(__dirname + '/node_modules/jquery/dist')); // redirect JS jQuery
app.use('/css', express.static(__dirname + '/node_modules/bootstrap/dist/css')); // redirect CSS bootstrap
app.use('/js', express.static(__dirname + '/node_modules/inputmask/dist/')); 
app.use('/js', express.static(__dirname + '/node_modules/popper.js/dist/')); 

// Body Parser Middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.get('/', (req, res) => {
  res.render('index');
});
app.post('/send', (req, res) => {

  //variable receive the  e-mail output
  const output = `
    <p> Email de contao do site Fast BI</p>
    <h3> Detalhes <h3>
    <ul>
      <li> Nome do Contato: ${req.body.name}</li> 
      <li> Telefone do Contato: ${req.body.phone}</li>  
      <li> e-mail do contato: ${req.body.email}</li>  
      <li> phone: ${req.body.phone}</li> 
      <li> termo aceito: Sim</li>  

    </ul>
    <h3> Mensagem:<h3>
    <p>${req.body.message}</p>
  `;

  // create reusable transporter object using the default SMTP transport
  let transporter = nodemailer.createTransport({
    host: 'mail.fastbi.com.br',
    port: 587,
    secure: false, // true for 465, false for other ports
    auth: {
      user: 'contato@fastbi.com.br', // generated ethereal user
      pass: '16061993Rr' // generated ethereal password
    },
    tls:{
      rejectUnauthorized:false
    }
  });

  // setup email data with unicode symbols
  let mailOptions = {
    from: req.body.name +'<'+ req.body.email +'>', // sender address
    to: 'contato@fastbi.com.br', // list of receivers
    subject: req.body.select, // Subject line
    text: '', // plain text body
    html: output // html body
  };

  //send mail with defined transport object
  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      return console.log(error);
    }
    console.log('[E-mail enviado : %s]', info.messageId);
  
    res.render('index');

  });
});

app.listen(3000, () => console.log('[Servidor Iniciado]'));