module.exports = {
    debug: true,

    initExecute: [
        'C:/Work/javaserver44/SG1_c/sf_301.php',
        'C:/Work/javaserver44/SG1_c/sf_303.php',
        'C:/Work/javaserver44/SG1_c/sf_402.php',
        'C:/Work/javaserver44/SG1_c/sf_890.php',
    ],
    php: "C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/binaries/php/php_runningversion/php.exe",
    phpExecute: [
        {
            name: "SerGame",
            path: 'C:/Work/javaserver44/SG1_c/service/serGame.php',
            arguments: [],
            delay: 2000,
            encoding: 'big5',
        }, {
            name: "SerPlay",
            path: 'C:/Work/javaserver44/SG1_c/service/serPlay.php',
            arguments: [],
            delay: 2000,
            encoding: 'big5',
        }, {
            name: "SerStarBet2",
            path: 'C:/Work/javaserver44/SG1_c/service/serStarBet2.php',
            arguments: [],
            delay: 2000,
            encoding: 'big5',
        },  {
            name: "SG_RT_BetList",
            path: 'C:/Work/javaserver44/SG1_c/BListFunc.php',
            arguments: [],
            delay: 1500,
            encoding: 'big5',
        }
        
    ],

    logger: {

    }


};
