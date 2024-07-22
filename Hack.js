<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hacker Type Simulation</title>
  <style>
    body {
      background-color: black;
      color: green;
      font-family: 'Courier New', Courier, monospace;
      padding: 20px;
      margin: 0;
      overflow: hidden;
    }
    #terminal {
      width: 100%;
      height: 100vh;
      white-space: pre-wrap;
      word-wrap: break-word;
    }
  </style>
</head>
<body>
  <div id="terminal"></div>

  <script>
    const terminal = document.getElementById('terminal');
    const hackerText = `
      root@hacker:~# nmap -A 192.168.1.1
      Starting Nmap 7.80 ( https://nmap.org ) at 2024-07-22 12:00
      Nmap scan report for 192.168.1.1
      Host is up (0.0010s latency).
      Not shown: 997 filtered ports
      PORT    STATE  SERVICE
      22/tcp  open   ssh
      80/tcp  open   http
      443/tcp open   https

      Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
      Nmap done: 1 IP address (1 host up) scanned in 2.31 seconds
      root@hacker:~# 

      root@hacker:~# ssh root@192.168.1.1
      The authenticity of host '192.168.1.1 (192.168.1.1)' can't be established.
      ECDSA key fingerprint is SHA256:mNhaPqzw6/qpS5JfjKprT8WQm68n9aR2Uz2Ndj8R8Jw.
      Are you sure you want to continue connecting (yes/no)? yes
      Warning: Permanently added '192.168.1.1' (ECDSA) to the list of known hosts.
      root@192.168.1.1's password: 

      Welcome to Ubuntu 20.04.1 LTS (GNU/Linux 5.4.0-42-generic x86_64)
      * Documentation:  https://help.ubuntu.com
      * Management:     https://landscape.canonical.com
      * Support:        https://ubuntu.com/advantage

      Last login: Mon Jul 22 11:45:00 2024 from 192.168.1.100
      root@ubuntu:~# 
    `;
    let i = 0;

    function typeText() {
      if (i < hackerText.length) {
        terminal.innerHTML += hackerText.charAt(i);
        i++;
        setTimeout(typeText, Math.random() * 50);
      }
    }

    typeText();
  </script>
</body>
</html>
