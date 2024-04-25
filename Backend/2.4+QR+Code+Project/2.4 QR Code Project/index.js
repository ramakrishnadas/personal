/* 
1. Use the inquirer npm package to get user input.
2. Use the qr-image npm package to turn the user entered URL into a QR code image.
3. Create a txt file to save the user input using the native fs node module.
*/
import inquirer from "inquirer";
import qr from "qr-image";
import fs from "fs";

const urlPrompt = {
    type: "input",
    name: "url",
    message: "Please enter a URL: "
};

inquirer.prompt(urlPrompt)
    .then(answers => {
        console.log('You entered:', answers.url);
        // Do something with the URL, like make a request or save it to a file
        var qr_png = qr.image(answers.url, { type: 'png' });
        qr_png.pipe(fs.createWriteStream('qr_img.png'));
        
        fs.writeFile("url.txt", answers.url, (err) => {
            if (err) throw err;
            console.log("The file has been saved!");
        });
    })
    .catch(error => {
        console.error('Error occurred:', error);
    });


