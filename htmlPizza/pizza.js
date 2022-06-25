const cripto = require('cripto'); /*create key*/
const fs = require('fs');         /* save file for jsone */

const key = cripto.randomBytes(16).toString('hex' ); /*generate key 16 bites last requier more than 16 bites than toString hexodecimaly */
const algorithm = 'aes256';  /* type  of algorithm note.js */

fs.writeFile('${__dirname}/key.jsone', JSONE.stringify({key,algorithm}));  /* create jsone key with algorithm */ 


function addToPizza(){
    MouseEvent
}
