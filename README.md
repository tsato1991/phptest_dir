# phptest_dir
PHPテスト用回答
問題文
Linuxのファイルシステムでは、最上位のディレクトリは/であることが保証されています。例えば、以下のようなファイル構成では、絶対パス表現で/hoge/Docs/TODO.txtや/hoge/Pictures/1.pngなどのファイルがあります。また、絶対パス表現で/hoge/Docs/や/hoge/や/hoge/Pictures/や/などのディレクトリが存在します。大文字小文字は区別するので、/hoge/Docs/と/hoge/docs/は別のディレクトリです。

/
└── hoge
    ├── Docs
    │   └── TODO.txt
    ├── Pictures
    │   ├── 1.png
    │   ├── 2.png
    │   └── 3.png
    └── README.md
Linuxでは、ディレクトリを移動するためにcdコマンドを使用します。あなたはLinuxの初心者なので、以下の 22 つの使い方しか知りません。

cd ..
一つ上のディレクトリに移動する
cd directory_name
現在のディレクトリに存在する、directory_nameという名前のディレクトリに移動する
今、あなたは絶対パスで ss のディレクトリにいて、絶対パスで tt のディレクトリに移動したいと考えています。最小で何回のcdコマンドを使う必要があるでしょうか？絶対パスを 22 つ受け取って、この間を移動するための最小コマンド使用数を計算するプログラムを作成してください。
例 1
/hoge/Picutures/ /hoge/Docs/

2
コマンドを以下のように打つことで、/hoge/Pictures/から/hoge/Docs/に移動することができます。

cd ..
cd Docs
例 2
/ /hoge/Pictures/

2
コマンドを以下のように打つことで、/から/hoge/Pictures/に移動することができます。

cd hoge
cd Pictures
