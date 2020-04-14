var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Biscuits Industrial' });
});
router.get('/ships', function(req, res, next) {
  console.log('Ship information');
  res.render('ships.ejs', {title: 'Ship information'});
});

module.exports = router;
