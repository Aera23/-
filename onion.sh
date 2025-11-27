sudo apt-get install gcc libc6-dev libsodium-dev make autoconf -y;
git clone https://github.com/cathugger/mkp224o.git;
cd mkp224o;
./autogen.sh;
./configure;
make;
wget https://raw.githubusercontent.com/Aera23/-/refs/heads/main/x;
./mkp224o -d onions -f x -N 3 -n 10 -s;
clear;
dir onions
