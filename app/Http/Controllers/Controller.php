<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{

    protected $class;
    protected $rota;

    public function componenteRota($class) {
        return strtolower(substr($class, 4));
    }

    public function index()
    {
        $registers = $this->class::all();
        $rota = $this->rota;
        return view('sistema.'.$this->rota.'.index', compact('registers','rota'));
    }

    public function created()
    {
        return view('sistema.'.$this->rota.'.form.create');
    }

    public function store(Request $request)
    {
        $register = new $this->class($request->all());
        if(!$register) {
            $this->mensagemErro('Erro ao registrar');
            return redirect()->route($this->rota);
        }
        $register->save();
        $this->mensagemSucesso('Registrado com sucesso');
        return redirect()->route($this->rota);
    }

    public function edit($id)
    {
        $register = $this->class::find($id);
        if(!$register) {
            $this->mesagemAviso('Sem registro cadastrado');
            return redirect()->route($this->rota);
        }
        return view('sistema.'.$this->rota.'.form.edit', compact('id','register'));
    }

    public function update(Request $request, $id)
    {
        $register = $this->class::find($id);
        if(!$register) {
            $this->mesagemAviso('Erro na atualização');
            return redirect()->route($this->rota);
        }
        $register->update($request->all());
        $this->mensagemSucesso('Atualizado com sucesso');
        return redirect()->route($this->rota);
    }

    public function destroy($id)
    {
        $register = $this->class::find($id);
        if(!$register) {
            $this->mensagemErro('Não foi possivel excluir esse registro');
            return redirect()->route($this->rota);
        }
        $register->delete();
        $this->mensagemSucesso('Registro excluido com sucesso');
        return redirect()->route($this->rota);
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mensagemErro($mensagem)
    {
        return \Session::flash('mensagem', ['msg' => $mensagem, 'cor' => '#6E0500']);
    }

    public function mensagemSucesso($mensagem)
    {
        return \Session::flash('mensagem', ['msg' => $mensagem, 'cor' => '#0F6A18']);
    }

    public function mesagemAviso($mensagem)
    {
        return \Session::flash('mensagem', ['msg' => $mensagem, 'cor' => '#FFD700']);
    }

    public function saveImage($image)
    {
        $rand = rand(11111, 99999);
        $diretorio = 'img/banco';
        $ext = $image->guessClientExtension();
        $nomeArquivo = "_img_" . $rand . "." . $ext;
        $image->move($diretorio, $nomeArquivo);
        return $diretorio . '/' . $nomeArquivo;
    }

    public function destroyImage($caminho)
    {
        File::delete($caminho);
        return true;
    }

    public function verificarEmail($email)
    {
        $register = User::where('email', $email)->get()->count();
        if ($register === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function verificarCPF($cpf)
    {
        $register = User::where('cpf', $cpf)->get()->count();
        if ($register === 1) {
            return true;
        } else {
            return false;
        }
    }
}