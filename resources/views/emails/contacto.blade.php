<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; background-color: #0f172a; color: #f8fafc; padding: 20px; }
        .card { background-color: #1e293b; border: 1px solid #334155; padding: 30px; border-radius: 12px; }
        .brand { color: #00f2ff; font-weight: bold; font-size: 24px; margin-bottom: 20px; }
        .label { color: #94a3b8; font-size: 12px; text-transform: uppercase; margin-top: 15px; }
        .value { font-size: 16px; margin-bottom: 5px; }
        .footer { margin-top: 30px; font-size: 11px; color: #64748b; }
    </style>
</head>
<body>
    <div class="card">
        <div class="brand">Solucion-e <span style="color: #ffffff;">| Nuevo Lead</span></div>

        <div class="label">Nombre del Cliente:</div>
        <div class="value">{{ $data['nombre'] }}</div>

        <div class="label">Tipo de Proyecto:</div>
        <div class="value">{{ $data['proyecto'] }}</div>

        <div class="label">Mensaje / Idea:</div>
        <div class="value" style="background: #0f172a; padding: 15px; border-radius: 8px;">
            {{ $data['mensaje'] }}
        </div>

        <div class="footer">
            Este correo fue enviado desde el formulario de contacto de solucion-e.com.mx
        </div>
    </div>
</body>
</html>
